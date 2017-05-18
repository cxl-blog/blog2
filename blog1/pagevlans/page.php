<?php
	class php1
	{
		public $rows;
		public $pagesize;
		public $offset;
		public $pagenum;
		public $page;
		

		function __construct($rows,$pagesize)
		{
			$this->rows=$rows;
			$this->pagesize=$pagesize;
			$this->pagenum=ceil($rows/$pagesize);
			//$this->pagenum=$pagenum;
		}
		function offset()
		{
			return $this->offset;
		}
		function pagela()
		{
			if (!isset($_GET['page'])) {
				$this->page = 1;
			}
			else if(isset($_GET['page']))
			{
				$this->page = $_GET['page'];
			}
			if($this->page<=0)
			{
				$this->page=1;
			}
			$this->offset = ($this->page - 1) * $this->pagesize;
			$page_list=$this->page-1;
			$page_next=$this->page+1;
			echo('<p>');
			echo("第 $this->page/$this->pagenum 页 共 $this->rows 条信息 ");
			echo("&nbsp;&nbsp;");
			echo("<a href=?page=1>首页</a>&nbsp;&nbsp;");
			if ($page_list>= 1)
			{
				echo("<a href=?page=$page_list>上一页</a>");
				echo("&nbsp;&nbsp;");
			}
			if ($page_next<= $this->pagenum)
				echo("<a href=?page=$page_next>下一页</a>&nbsp;&nbsp;");
			echo("<a href=?page=$this->pagenum>末页</a>&nbsp;&nbsp;跳转");

			?>

			<select name="tpage" onchange="windows.location.href='this.value'">
				<?php

				for ($i = 1; $i <= $this->pagenum; $i++) {
					?>

					<option value="../blogtext/vlans.php?page=<?php echo $i ?>"
						  selected="selected"><?php echo $i ?></option>";<?php
				} ?>
			</select>
			<?php

		}
		function __destruct()
		{
			// TODO: Implement __destruct() method.
		}
	}

?>