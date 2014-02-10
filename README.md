childframe_post
===============

親フレームで入力された値を子フレームに渡して、そのまま子フレーム側でPOSTするサンプル



・配置方法
１．親フレームを置くweb server側にstart.htmlを配置し、
子フレームを置くweb server側にchild.php, postresult.phpを配置します。

２．start.htmlの内容を修正します。
http://childhost

こちらを子フレーム側のURLに変更します。


３．child.phpの内容を修正します。
http://parenthost

こちらを親フレーム側のURLに変更します。


