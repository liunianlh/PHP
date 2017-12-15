
<?php

//Redis的操作类

class RedisDB {

    //获取redis的实例化对象
    private $redis;
    public static $link;

//    单例模式
    public static function getInstance() {
        if (empty(self::$link)){
            self::$link= new self();
        }
        return self ::$link;
    }

    public function __construct() {
        $this->redis = new Redis();
        //redis连接
        $this->redis->connect("127.0.0.1", "6379");
    }

//    返回redis
    
    public function getRedis(){
        return $this->redis;
    }










//    -------------------------------字符串类型操作----------------------------------------
//    设置字符串类型的缓存
//    @paran string $ket:键
//    @paran string $value:值
//    @param int $time: 有效期，值为0，代表永久

    public function stringSet($key, $value, $time = 0) {
        if ($time == 0) {
            $this->redis->set($key, $value);
        } else {
            $this->redis->setex($key, $time, $value);
        }
    }

//    获取

    public function stringGet($key) {
        return $this->redis->get($key);
    }

//    删除
    public function stringDel($key) {
        return $this->redis->del($key);
    }

//    判断是否存在
    public function stringExists($key) {
        return $this->redis->exists($key);
    }

}

$redis = new RedisDB();

$resis->get("name");
