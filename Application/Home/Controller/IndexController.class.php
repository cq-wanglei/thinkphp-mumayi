<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		
		if (I('get.key')) {
			$k = substr(I('get.key'), 2);
			G('begin');
			$s = M('ci')->where("gjc = '%s'",$k)->find();
			/*
				如果是登陆页
			*/
			if ($k == 'login.html') {
				header('HTTP/1.1 301 Moved Permanently');    
       			header('Location: /index.php/Home/Index/login');
       			die();
			}

			if ($s) {
				if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"])=="xmlhttprequest"){ 
  					// ajax 请求的处理方式 
				}else{
					$q['view'] = $s['view'] + 1;
					M('ci')->where("id = %d",$s['id'])->save($q);
				}
				if ($s['ci']) {
					//信息完整
					$data = $s;
					$data['ci'] = json_decode($data['ci'],true);
					$data['nav'] = json_decode($data['nav'],true);
					$data['youqing'] = json_decode($data['youqing'],true);
					$this->assign('data',$data);
				}else{
					$data['xinzeng']	=	rand(1000,10000); //今日新增词条
					$data['zaixian']	=	rand(100,1000); //在线人数
					$s = M('ci')->field('gjc')->order('view desc')->limit(10)->select();
					$data['nav']	 = 	$s; //顶部导航
					$s = baidu($k);
					if (count($s) == 0) {
						header('HTTP/1.1 301 Moved Permanently');    
       					header('Location: /');
       					die();
					}
					$v = array();
					foreach ($s as $key => $value) {
						$otherci = M('ci')->where("gjc='%s'",$value)->count();
						if ($otherci == 0) {
							$vv['gjc'] = $value;
							M('ci')->add($vv);
						}
						$v[$key] = array(
							'ci' => $value,
							'dj' => rand(100,1000),//点击
							'gz' => rand(100,1000),//关注
							'py' => getallpingyin($value), //拼音
							'slsj' => date("Y年-m月-d日"), //收录时间
						);
					}
					$data['ci']	 	= 	 $v;//相关词
					//print_r($data['ci']);
					$s = M('ci')->field('gjc')->order('rand()')->limit(5)->select();
					$data['youqing'] = $s;	//友情链接
					$data['gjc'] = $k;
					$this->assign('data',$data);
					$data['nav'] = json_encode($data['nav']);
					$data['ci'] = json_encode($data['ci']);
					$data['youqing'] = json_encode($data['youqing']);
					M('ci')->where("gjc = '%s'",$k)->save($data);
				}
			}else{
				$data['xinzeng']	=	rand(1000,10000); //今日新增词条
				$data['zaixian']	=	rand(100,1000); //在线人数
				
				$s = baidu($k);
				if (count($s) == 0) {
					header('HTTP/1.1 301 Moved Permanently');    
       				header('Location: /');
       				die();
				}
				$v = array();
				foreach ($s as $key => $value) {
					$otherci = M('ci')->where("gjc='%s'",$value)->count();
					if ($otherci == 0) {
						$vv['gjc'] = $value;
						M('ci')->add($vv);
					}
					$v[$key] = array(
						'ci' => $value,
						'dj' => rand(100,1000),//点击
						'gz' => rand(100,1000),//关注
						'py' => getallpingyin($value), //拼音
						'slsj' => date("Y年-m月-d日"), //收录时间
					);
				}
				$data['ci']	 	= 	 $v;//相关词
				$s = M('ci')->field('gjc')->order('view desc')->limit(10)->select();
				$data['nav']	 = 	$s; //顶部导航
				$s = M('ci')->field('gjc')->order('rand()')->limit(50)->select();
				$data['youqing'] = $s;	//友情链接
				$data['gjc'] = $k;
				$this->assign('data',$data);
				$data['nav'] = json_encode($data['nav']);
				$data['ci'] = json_encode($data['ci']);
				$data['youqing'] = json_encode($data['youqing']);
				M('ci')->add($data);
			}
			G('end');
			$this->display();
		}else{
			echo '123';
		}
		
		
	}
}