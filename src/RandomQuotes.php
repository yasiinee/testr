<?php

  namespace RandomQuotes;

  class hello {

    public function sayhello() {

     echo "hello world";
    }

    public function generate() {
      return $this->sayhello();
    }

  }
