<?php
    class Loginview{
        
        private static $username = 'Loginview::Username';
        private static $password = 'Loginview::Password';
        private static $login = 'Loginview::Login';
        
        
    //--------------------------------------------------------------------------    
        /**
         * returns the html for the loginform
        */
        public function htmlloginrespons(){
            return '
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s4">
                          <input name="'. self::$username .'" id="first_name" type="text" class="validate">
                          <label for="first_name">Username</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s4">
                          <input name="'.  self::$password .'" id="password" type="password" class="validate">
                          <label for="password">Password</label>
                        </div>
                      </div>
                      <div class="row>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                          </button>
                      </div>
                    </form>
                  </div>
            ';
        }
        /**
         * returns the html for the logoutbutton
        */
        public function htmllogoutrespons(){
            return '
            ';
        }
        
        
    }
?>