<?php

/**
 * 
 *
 * @author      Maikel Chandika <mike_hellsing@yahoo.com>
 */
echo 'Daftar isi Blogku: <br/><br/>';
echo!empty($table) ? $table : '';
echo '<br/>';
echo!empty($pagination) ? '<p id="pagination">' . $pagination . '</p>' : '';
?>
