         <header class="header" style=" margin-bottom:38px;">
					   <?php $this->display('index/inc_user.php') ?>
                        <div class="header-navbg">
                            <div class="wrapper">
                                <a href="/" ><div class="logo"></div></a>
                                <div id="dd" class="header-nav-game" tabindex="1">全部游戏
                                    <ul class="dropdown"> 
					<?php
			   		   $_playData = $this->getRows("select * from {$this->prename}type where enable=1 and isDelete=0 order by sort");
			   		   $playData = array();
			   		   foreach($_playData as $val) {
					?>
					<li><?php if($val['enable']=='1'){?><a href="<?=$this->basePath('Index-game',  $val['id'].'/'.$val['defaultViewGroup']) ?>"><span class='fa fa-chevron-circle-right fa-lg'></span><?=$val['title'] ?></a><?php }?></li>
				<?php } ?>      
                         </ul>
                     </div>
                      <ul class="header-nav-user">                
              <li><a class="default_home" href="/" ><div class="fa fa-home fa-2x"></div>网站首页</a></li>
              <li><a class="account_autosave" href="<?=$this->basePath('Cash-recharge') ?>" ><div class="fa fa-cny fa-2x"></div>充值提现</a></li>
              <li><a class="history_playlist" href="<?=$this->basePath('Record-search') ?>" ><div class="fa fa-gamepad fa-2x"></div>游戏报表</a></li>
			  <?php if($this->user['type']){ ?>
              <li><a class="users_list" href="<?=$this->basePath('Team-memberList') ?>" ><div class="fa fa-users fa-2x"></div>代理中心</a></li>
			  <?php } ?>
              <li><a class="users_info" href="<?=$this->basePath('Safe-info') ?>" ><div class="fa fa-cogs fa-2x"></div>账户中心</a></li>
              <li><a class="promotion_center" href="<?=$this->basePath('Event-huodong') ?>" ><div class="fa fa-bullhorn  fa-2x"></div>活动中心</a></li>
              <li><a class="account_autosave" href="<?=$this->basePath('Score-goods') ?>" ><div class="fa fa-fire  fa-2x"></div>金币兑换</a></li>
              <li><a class="csonline_list" href="javascript:void(0)" onclick="kf()" ><div class="fa fa-wechat fa-2x"></div>在线客服</a></li>
              <li><a class="help_general" href="<?=$this->basePath('Help-index') ?>" ><div class="fa fa-question fa-2x"></div>常见问题</a></li>
                         </ul>
                            </div>
                        </div>
                    </header>
<script type='text/javascript'>
function kf(){
<?php if($this->settings['kefuStatus']==1 && $this->user['kf']==1){ ?> //客服是否开启 个人客服是否开启
	var iTop = (window.screen.availHeight-30-570)/2; //获得窗口的垂直位置;
	var iLeft = (window.screen.availWidth-10-750)/2; //获得窗口的水平位置;
	var url = '<?=$this->settings['kefuGG']?>';
	var winOption = "height=570,width=750,top="+iTop+",left="+iLeft+",toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,fullscreen=1";
	var newWin = window.open(url,window, winOption);
	<?php }else{ ?>
     	davidInfo("客服系统正在维护，程序猿在拼命打代码，请稍后访问！");
	<?php } ?>
	return false;
}
function down(){
    window.location="<?=$this->settings['templateurl'] ?>/template/down/inst.exe";
}
</script>