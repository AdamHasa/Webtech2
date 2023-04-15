<?php

class examInfo
{
    public function examList(Request $request){
        $key = $request->key;
        echo $key;
    }

    public function urlFetch($key){
        echo $key;
    }


}