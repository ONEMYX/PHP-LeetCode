<?php

class Twitter
{
    private $tweet;
    private $foll;

    /**
     * Initialize your data structure here.
     */
    function __construct()
    {
        $this->tweet = [];
        $this->foll  = [];
        $this->id = 1;
    }

    /**
     * Compose a new tweet.
     * @param Integer $userId
     * @param Integer $tweetId
     * @return NULL
     */
    function postTweet($userId, $tweetId)
    {
        $this->tweet[ $userId ][] = ['id'=>$this->id,'data'=>$tweetId];
        $this->id++;
    }

    /**
     * Retrieve the 10 most recent tweet ids in the user's news feed. Each item in the news feed must be posted by users who the user followed or by the user herself. Tweets must be ordered from most recent to least recent.
     * @param Integer $userId
     * @return Integer[]
     */
    function getNewsFeed($userId)
    {
        $arr = [];
        if ($this->tweet[ $userId ]) $arr = $this->tweet[ $userId ];

        if (isset($this->foll[ $userId ])) {
            foreach ($this->foll[ $userId ] as $key => $id) {
                if ($key==$userId) continue;
                if ($this->tweet[ $key ]) $arr =array_merge($arr,$this->tweet[$key]) ;

            }
        }
        $arr =  array_column($arr,'data','id');
        krsort($arr);
        $new = [];
        $i = 0;
        foreach ($arr as $key =>$item){
            if ($i>=10){
                break;
            }
            $i++;
            $new[] = $item;
        }
        return $new;
    }

    /**
     * Follower follows a followee. If the operation is invalid, it should be a no-op.
     * @param Integer $followerId
     * @param Integer $followeeId
     * @return NULL
     */
    function follow($followerId, $followeeId)
    {
        $this->foll[ $followerId ][ $followeeId ] = 1;
    }

    /**
     * Follower unfollows a followee. If the operation is invalid, it should be a no-op.
     * @param Integer $followerId
     * @param Integer $followeeId
     * @return NULL
     */
    function unfollow($followerId, $followeeId)
    {
        unset($this->foll[ $followerId ][ $followeeId ]);
    }
}

/**
 * Your Twitter object will be instantiated and called as such:
 * $obj = Twitter();
 * $obj->postTweet($userId, $tweetId);
 * $ret_2 = $obj->getNewsFeed($userId);
 * $obj->follow($followerId, $followeeId);
 * $obj->unfollow($followerId, $followeeId);
 */

$userId     = 1;
$tweetId    = 2;
$followerId = 1;
$followeeId = 2;

$obj = new Twitter();
$obj->postTweet(1, 5);
$obj->postTweet(1, 1);
$obj->follow(1, 1);
$ret_2 = $obj->getNewsFeed($userId);

$obj->unfollow($followerId, $followeeId);