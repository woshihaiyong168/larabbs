<?php  
if (! function_exists('testt')) {
    /**
     *
     * 测试公共函数
     *
     * @return string
     */
    function testt()
    {
        return 'wechatapp_test';
    }
}

if (! function_exists('route_class')) {
    /**
     *
     * 路由名称转换为 CSS 类名称
     *
     * @return mixed
     */
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}

?>




