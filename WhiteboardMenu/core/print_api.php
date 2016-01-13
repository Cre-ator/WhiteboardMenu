<?php

class print_api
{
   public function printWhiteboardMenu()
   {
      echo '<table align="center">';
      echo '<tr">';

      if (  plugin_is_installed( 'UserProjectView' )
         && file_exists ( config_get_global ( 'plugin_path' ) . 'UserProjectView' )
         )
      {
         echo '<td>';
         echo '| ';
         echo '<a href="' . plugin_page( 'UserProject', false, 'UserProjectView' ) . '&sortVal=userName&sort=ASC">' . plugin_lang_get( 'menu_userprojecttitle', 'UserProjectView' ) . '</a>';
         echo '</td>';
      }

      if (  plugin_is_installed( 'SpecManagement' )
         && file_exists ( config_get_global ( 'plugin_path' ) . 'SpecManagement' )
         )
      {
         echo '<td>';
         echo '| ';
         echo '<a href="' . plugin_page( 'choose_document', false, 'SpecManagement' ) . '">' . plugin_lang_get( 'menu_title', 'SpecManagement' ) . '</a>';
         echo '</td>';
      }

      echo '<td>';
      echo ' |';
      echo '</td>';

      echo '</tr>';
      echo '</table>';
   }
}