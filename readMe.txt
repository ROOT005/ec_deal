
首先声明：在iis下调试伪静态不生效，建议使用apache调试，直接使用phpstudy就可以

1.上传程序到网站根目录,访问http://域名/phpmyadmin用你的数据库用户名和密码登陆，登陆后选择左侧的数据库名称再点击右侧的导入选项，将根目录下的demo.sql文件，不会的可以参照图文教程：http://www.52jscn.com/web/2015/06/8882.shtml

2.用EditPlus或者dreamweaver工具修改数据库连接文件，打开App\Common\Conf\db.php这个文件将里面的root改成你的数据库用户名，52jscn.com修改成你的数据库密码，demo改成你的数据库名称即可；

2.安装完成后  后台默认路径是http://您的域名/admin （如果出现404找不到页面的错误那就是你的主机不支持伪静态造成的） 默认帐号密码分别是admin和bbs.52jscn.com


剩下的自行摸索研究吧，本人对此程序眼睛不是太深，有兴趣的可以继续探索！