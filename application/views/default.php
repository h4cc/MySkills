<?php $qtdMsn =  $this->job_model->listMessageJobByUserDeveloper($this->session->userdata('userid'));?>
<!DOCTYPE html>
<html lang="en">
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-32586156-1']);
        _gaq.push(['_setDomainName', 'myskills.com.br']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <!-- start Mixpanel -->
    <script type="text/javascript">
        /*(function(c,b){var a,d,h,e;a=c.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===c.location.protocol?"https:":"http:")+'//api.mixpanel.com/site_media/js/api/mixpanel.2.js';d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(a,d);b._i=[];b.init=function(a,c,f){function d(a,b){var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]);a[b]=function(){a.push([b].concat(Array.prototype.slice.call(arguments,0)))}}var g=b;"undefined"!==typeof f?g=
                    b[f]=[]:f="mixpanel";g.people=g.people||[];h="disable track track_pageview track_links track_forms register register_once unregister identify name_tag set_config people.set people.increment".split(" ");for(e=0;e<h.length;e++)d(g,h[e]);b._i.push([a,c,f])};window.mixpanel=b})(document,window.mixpanel||[]);
        mixpanel.init("7f870774942301f4f0b1e8a1dd1f3e68");*/

        /** Novo Mix panel **/
        (function(c,a){var b,d,h,e;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src=("https:"===c.location.protocol?"https:":"http:")+'//api.mixpanel.com/site_media/js/api/mixpanel.2.js';d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d);a._i=[];a.init=function(b,c,f){function d(a,b){var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]);a[b]=function(){a.push([b].concat(Array.prototype.slice.call(arguments,0)))}}var g=a;"undefined"!==typeof f?g=
                    a[f]=[]:f="mixpanel";g.people=g.people||[];h="disable track track_pageview track_links track_forms register register_once unregister identify name_tag set_config people.set people.increment".split(" ");for(e=0;e<h.length;e++)d(g,h[e]);a._i.push([b,c,f])};a.__SV=1.1;window.mixpanel=a})(document,window.mixpanel||[]);
        mixpanel.init("7f870774942301f4f0b1e8a1dd1f3e68");
<?php 
if ($this->session->userdata('justcreatedU') == true) {
    ?>	
            mixpanel.identify(<?php echo $this->session->userdata('fbuidU') ?>);
            mixpanel.people.set({
                "name": "<?php echo $this->session->userdata('nameU') ?>",
                "$email": "<?php echo $this->session->userdata('emailU') ?>",
                "$created": "<?php echo $this->session->userdata('createdU') ?>"
            });
            mixpanel.name_tag("<?php echo $this->session->userdata('nameU') ?>");
<?php } ?>
    </script><!-- end Mixpanel -->        
    <head>
        <script src="//cdn.optimizely.com/js/111465504.js"></script>
        <meta property="og:title" content="Meet the best developers"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.myskills.com.br"/>
        <meta property="og:image" content="http://www.myskills.com.br/assets/images/MySkills-64.png"/>
        <meta property="og:site_name" content="MySkills.com.br"/>
        <meta property="og:description" content="Hire the best professionals."/>
        
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-tab.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
        <link href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/reboot-landing.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/reboot-landing-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/themes/green/theme.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/pages/homepage.css" rel="stylesheet">
        <link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }

            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
    
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

        </style>


        <!--<link href="<?php echo base_url(); ?>assets/js/lightbox/themes/default/jquery.lightbox.css" rel="stylesheet">-->

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.datepicker-pt-BR.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/facebook.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap_tab.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap_alert.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap_dropdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap_modal.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>


        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlxecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta property="og:title" content="Meet the best developers"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.myskills.com.br"/>
        <meta property="og:image" content="http://www.myskills.com.br/assets/images/MySkills-64.png"/>
        <meta property="og:site_name" content="MySkills.com.br"/>
        <meta property="og:description" content="Hire the best professionals."/>
    </head>
    <body>
    
        <div id="fb-root"></div>
        <script type="text/javascript">
                       
            var appId = "<?php echo $this->facebook_model->getAppId(); ?>";
            var base_url = '<?php echo base_url(); ?>';

            window.fbAsyncInit = function() {

                FB.init({
                    appId      : appId,
                    status     : true, 
                    cookie     : true,
                    xfbml      : true,
                    oauth      : true
                });

                FB.getLoginStatus(function(response) {
                    if (response.status == 'connected') {
                        FB.api(
                        {
                            method : 'fql.query',
                            query : 'SELECT uid, name, first_name,middle_name,last_name,pic, pic_square, work FROM user WHERE uid = me()'
                        }
                        , me);
                    }
                });
            };

            function me(response) {
                var hname = document.getElementById('hname');
                var hwork = document.getElementById('hwork');
                
                if (hname != null) {
                    hname.innerHTML += response[0].name;
                }
                
                if (hwork != null) {
                    hwork.innerHTML += response[0].work[0].position.name + ' at ' + response[0].work[0].employer.name;
                }                
            }

            function fbLogin() {
                FB.getLoginStatus(function(response) {
                    console.log(response.status);
                    FB.login(function(data) {
                        FB.api('/me', function(response) {
                          
                            var data = {
                                uid   : response.id,
                                email : response.email,
                                name  : response.first_name,
                                surname: response.last_name
                            };
                            
                            if (data.uid == undefined || data.uid == null) {
                                return false;
                            }

                            $.ajax({
                                type : 'POST',
                                dataType : 'json',
                                data : data,
                                url : base_url + 'index/login',
                                success : function(rs) {
                                    if (rs.login == true) {
                                        
                                        if (rs.justcreated == true) {
                                                                                        
                                            mixpanel.identify(rs.fbuid);
                                            mixpanel.people.set({
                                                "name": rs.name,
                                                "$email": rs.email,
                                                "$created": rs.created
                                            });
                                            mixpanel.name_tag(rs.name);
                                        }
                                        
                                        window.location = base_url + 'index/dashboard';
                                    }
                                }
                            });
                        });

                    }, {scope: 'user_photos,email'});
                   
                });
            };

            function fbLogout() {
                    
                $.ajax({
                    type : 'POST',
                    dataType : 'json',
                    url : base_url + 'index/logout',
                    success : function() {
                        FB.logout();
                        //document.location.reload();
                        window.location = base_url + 'index/home';
                    }
                });
                //FB.logout(function(response) {
                //window.location = base_url + 'index/logout';
                //window.location = base_url;
                //});
            };
    
            function isAppUser() {
                FB.getLoginStatus(function(response) {
                    if (response.status == 'connected') {
                        var FQL = 'SELECT uid FROM user WHERE uid IN (SELECT uid2 FROM friend WHERE uid1 = me()) AND is_app_user = 1'
                        FB.api({
                            method : 'fql.query',
                            query : FQL
                        }, function(rs) {
                            console.log(rs);
                        });                
                    }
                });
            }

            (function(d){
                var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                js = d.createElement('script'); js.id = id; js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js";
                d.getElementsByTagName('head')[0].appendChild(js);
            }(document));
            
            
            $(document).ready(function() {
                $('.dropdown-toggle').dropdown();
            });
                
        </script>
        <div class="navbar navbar-fixed-top">
           
            <div class="navbar-inner">
                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li class="active">
                                <?php if ($this->session->userdata('uid') > 0) : ?>
                                    <a href="<?php echo base_url(); ?>index/dashboard">
                                    <?php else: ?>
                                        <a href="<?php echo base_url(); ?>index/home">
                                        <?php endif; ?>
                                        Home
                                    </a>						
                            </li>
                            <?php if ($this->session->userdata('uid') > 0) : 
                            		if ($this->session->userdata('developer') == true) :	
                            ?>
		                                <li>						
		                                    <a href="<?php echo base_url(); ?>index/jobs">
		                                        Apply for a job
		                                    </a>
		                                </li>
		                            <?php endif;?>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('uid') > 0) : 
                            			if ($this->session->userdata('developer') == true) :
                            ?>
			                                <li>						
			                                    <a href="<?php echo base_url(); ?>index/claimBadges">
			                                        Claim Badge
			                                    </a>						
			                                </li>
                            			<?php endif; ?>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('uid') > 0) : 
                            			if ($this->session->userdata('developer') == true) :
                            ?>
			                                <li>						
			                                    <a href="<?php echo base_url(); ?>index/courses">
			                                        Apply for a Course
			                                    </a>						
			                                </li>
                            		<?php endif; ?>
                            <?php endif; ?>
                            <?php if ($this->session->userdata('uid') > 0) : 
                            			if ($this->session->userdata('recruiter') == true) :
                            ?>
			                                <li class="dropdown" id="fat-menu">						
			                                    <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"> My Jobs <b class="caret"></b></a>
			                                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
			                                        <li><a href="<?php echo base_url(); ?>index/myJobs">View Jobs</a></li>
			                                        <li><a href="<?php echo base_url();?>/index/registerNewJob"  title="Add New Job">Add New Job</a></li>
			                                    </ul>
			                                    						
			                                </li>
                            		<?php endif; ?>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo base_url(); ?>index/features">
                                    Features
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index/leaderboard">
                                    Leaderboard
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index/companies">
                                    Companies
                                </a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo base_url(); ?>index/events">
                                    Events
                                </a>
                            </li> -->
                            <li>						
                                <a href="<?php echo base_url(); ?>index/contact">
                                    Contact Us
                                </a>						
                            </li>
                            <?php if ($this->session->userdata('uid') > 0) : 
                            		$link2 = null;
                            ?>
									 <?php if ($this->session->userdata('recruiter') == true) : ?>
                                        <?php $link2 = 'index/myJobs'; ?>
                                    <?php elseif ($this->session->userdata('developer') == true) : ?>
                                        <?php $link2 = 'index/profile'; ?>
                                    <?php endif; ?>                               
                                <li>
                                    <a  href="<?php echo base_url().$link2;?>">
                                        <img id="userpic" src="https://graph.facebook.com/<?php echo $this->session->userdata('uid'); ?>/picture&type=square" width="25" height="25" />
                                        <?php if($qtdMsn[0]->qtd > 0):?>
                                    		<span class="badge badge-important"><?php echo $qtdMsn[0]->qtd;?></span>
                                    <?php endif;?>
                                    </a>
                                    
                                </li>
                                <li class="dropdown" id="fat-menu">
                                    <?php $link = null; ?>
                                    <?php if ($this->session->userdata('recruiter') == true) : ?>
                                        <?php $link = 'index/profile'; ?>
                                    <?php elseif ($this->session->userdata('developer') == true) : ?>
                                        <?php $link = 'index/profile'; ?>
                                    <?php else: ?>
                                        <?php $link = 'index/dashboard'; ?>
                                    <?php endif; ?>                                    
                                    <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('name'); ?> <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                        <li><a href="<?php echo base_url() . $link; ?>" title="View Profile">View Profile</a></li>
                                        <li><a href="<?php echo base_url(); ?>index/editProfile" title="Edit Profile">Edit Profile</a></li>
                                        <li><a href="#" onclick="fbLogout();" title="Sign-out">Sign-out</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $content_for_layout; ?> 
        <div id="footer">
            <div id="extra">
                <div class="inner">

                    <div class="container">

                        <div class="row">
                            <!-- SPAN4 subiu pra SPAN12 somente para apresentar o icone do Facebook-->
                            <div class="span4">

                                <h3><span class="slash">//</span> Quick Links</h3>


                                <ul class="footer-links clearfix">
                                    <li><a href="./">Home</a></li>
                                    <li><a href="<?php echo base_url(); ?>index/features">Features</a></li>
                                    <li><a href="http://myskills.tumblr.com" target="_blank">BLOG</a></li>
                                    <li><a href="<?php echo base_url(); ?>index/mailingArchive">Mailing Archive</a></li>
                                    <!--  <li><a href="./about.html">About</a></li>
                                     <li><a href="./faq.html">FAQ</a></li>-->
                                </ul>

                                <ul class="footer-links clearfix">  	
                                    <li><a href="http://myskills.uservoice.com/" target="_blank">Support</a></li>
                                    <li><a href="<?php echo base_url(); ?>index/privacyPolicy">Privacy Policy</a></li>
                                    <li><a href="<?php echo base_url(); ?>index/contact">Contact Us</a></li>
                                    <!-- <li><a href="javascript:;">License</a></li>
                                     <li><a href="javascript:;">Terms of Use</a></li>-->
                                    <!-- <li><a href="javascript:;">Something Else</a></li> -->
                                </ul>

                            </div>
                            <div class="span4">

                                <h3><span class="slash">//</span> Stay In Touch</h3>


                                <p>There are real people behind MySkills.com.br, so if you have a question or suggestion (no matter how small) please get in touch with us:</p>

                                <ul class="social-icons-container">
                                    <!--
                                    <li>
                                            <a href="javascript:;" class="social-icon social-icon-twitter">
                                                    Twitter
                                            </a>
                                    </li>
                                            
                                    <li>
                                            <a href="javascript:;" class="social-icon social-icon-googleplus">
                                                    Google +
                                            </a>
                                    </li>
                                    -->
                                    <li>							
                                        <a href="http://www.facebook.com/MySkills.com.br" class="social-icon social-icon-facebook">
                                            Facebook
                                        </a>
                                    </li>

                                </ul> <!-- /extra-social -->

                            </div> <!-- /span4 -->


                            <div class="span4">

                                <h3><span class="slash">//</span> Subscribe and get updates</h3>


                                <p>Subscribe to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>


                                <div id="mc_embed_signup1">

                                    <form action="http://myskills.us5.list-manage1.com/subscribe/post?u=c22dec5cbd87c068118755814&amp;id=30cd3f42fe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">

                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>

                                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

                                    </form>
                                    <script type="text/javascript" language="JavaScript" src="http://myskills.us5.list-manage1.com/subscriber-count?b=28&u=00d2e3de-199f-4c91-ae5a-5433b3ea5e9f&id=30cd3f42fe"></script>
                                </div>



                                <!--End mc_embed_signup-->
                            </div> <!-- span 4 -->


                        </div> 
                    </div> 

                </div>

            </div> 
        </div>

    </div>
    <!-- begin olark code --><script data-cfasync="false" type='text/javascript'>/*{literal}<![CDATA[*/
        window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){f[z]=function(){(a.s=a.s||[]).push(arguments)};var a=f[z]._={},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={0:+new Date};a.P=function(u){a.p[u]=new Date-a.p[0]};function s(){a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{b.contentWindow[g].open()}catch(w){c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{var t=b.contentWindow[g];t.write(p());t.close()}catch(x){b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
        /* custom configuration goes here (www.olark.com/documentation) */
        olark.identify('8338-468-10-6680');/*]]>{/literal}*/</script><noscript><a href="https://www.olark.com/site/8338-468-10-6680/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript><!-- end olark code -->        
</body>
</html>