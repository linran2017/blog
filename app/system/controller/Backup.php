<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/21
 * Time: 18:56
 */

namespace app\system\controller;


use houdunwang\dir\Dir;
use houdunwang\request\Request;
use houdunwang\backup\Backup as BackupServer;
class Backup{
    public function lists(){
        $dirs=Dir::tree('backup');
       //p($dirs);
        return view('',compact('dirs'));
    }

    /**
     * 还原
     */
    public function recover(){
        $dir=Request::get('dir');
        //要还原的备份目录
        $config=['dir'=>$dir];
        $status = BackupServer::recovery( $config, function ( $result ) {
            if ( $result['status'] == 'run' ) {
                //还原进行中
                echo $result['message'];
                //刷新当前页面继续执行
                echo "<script>setTimeout(function(){location.href='{$_SERVER['REQUEST_URI']}'},1000);</script>";
            } else {
                //还原执行完毕
                echo $result['message'];
            }
        } );
        if($status===false){
            //还原过程出现错误
            echo  BackupServer::getError();
        }
    }

    /**
     * 备份
     */
    public function backups(){
        $config = [
            'size' => 2,//分卷大小单位KB
            'dir'  => 'backup/' . date( "Ymdhis" ),//备份目录
        ];
        $status = BackupServer::backup( $config, function ( $result ) {
            if ( $result['status'] == 'run' ) {
                //备份进行中
                echo view('',compact('result'));
                exit;
            } else {
                //备份执行完毕
                echo view('done.php');
                exit;
            }
        } );
        if($status===false){
            //备份过程出现错误
            echo  BackupServer::getError();
        }
    }
}