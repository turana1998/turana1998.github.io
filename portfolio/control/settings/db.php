<?php

  class DBConnection extends PDO{
      const host="us-cdbr-east-05.cleardb.net";
      const dbname="heroku_22880bc0fe1d4de";
      const user="b6c206e410f3fa";
      const pass="edff1b8d";
      const port="";

      public function __construct()
      {
          parent::__construct("mysql:host=".self::host.";dbname=".self::dbname.";charset=utf8", self::user, self::pass);
          $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      }
  }
?>