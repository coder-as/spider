<?php 
return [
    /**
     * 宽高比最大最小
     * 
     */
    'radioUp' => 1.8,
    'radioDown' => 0.59,
    /**
     * 图片最小size
     */
    'minsize' => 50000,//100k
    'maxsize' => 1000000,
    /**
     * 过滤后缀为以下图片
     */
    'type' => ['png','gif', 'jpeg', 'jpg'],

    /**
     * 一次爬取时间
     * 
     */
    'timeout' => 60,//1/2小时
    /**
     * 一次爬取张数
     * 
     */
    'maxCount' => 4000,//每次最大爬取张数

    'strategy' => '500-0-8'
];