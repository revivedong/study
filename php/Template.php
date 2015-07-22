<?php

	class Template{
		private $arrayConfig = array(
			"suffix" => '.m',  //设置模文件的后缀
			'templateDir' => 'template/', //设置模板所在的文件夹
			'compiledir' => 'cache', //设置编译成静态的HTML文件
			'cache_htm' => 'false',//是否需要编译成静态的ＨＴＭＬ文件
			'suffix_cache' => '.htm',//设置编译成文件的后缀
			'cache_time' => 7200 //多长时间自动更新，单位秒
		);

		public $file;//模板文件名
		private $value = array();
		private $compileTool;
		static private $instance = null;


		public function __construct($arrayConfig = array()){
			
			$this->arrayConfig = $arrayConfig + $this->arrayConfig;
			include('CompileClass.php');
			$this->compileTool = new CompileClass;
		}
		// 取得模板引擎的势实例
		public static function getInstance(){
			if (is_null(self::$instance)) {
				self::$instance = new Template();

			}
			return self::$instance;
		}
		// 单步设置引擎
		public function setConfig($key,$value = null){
			if(is_array($key)){
				$this->arrayConfig = $key + $this->arrayConfig;

			}else{
				$this->arrayConfig[$key] = $value;
			}
		}

		//获取当前模板引擎配置，仅供调试使用
		public function getConfig($key = null){
			if ($key) {
				return $this->arrayConfig[$key];
			}else{
				return $this->arrayConfig;
			}
		}


		//注入单个变量
		public function assign($key,$value){
			$this->value[$key] = $value;
		}
		//注入数组变量
		public function assignArray($array){
			if (is_array($array)) {
				foreach ($array as $k => $v) {
					$this->value[$k] = $v;
 				}
			}
		}

		public function path(){
			return $this->arrayConfig['templateDir'].$this->file.$this->arrayConfig['suffix'];
		}

		public function show($file){
			$this->file = $file;
			if (!is_file($this->path())) {
				exit('找不到对应的模板');
			}
			$compileFile = $this->arrayConfig['compiledir'].'/'.md5($file).'.php';
			var_dump($compileFile);
			var_dump($this->path());
			if (!is_file($compileFile)) {
				mkdir($this->arrayConfig['compiledir']);
				$this->compileTool->compile($this->path(),$compileFile);

			}else{
				readfile($compileFile);
			}
		}
	}

?>
