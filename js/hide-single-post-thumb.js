/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    console.log("single post thumb script loaded");
    $(".single-post-thumbnail img").click(function(){
            $(".single-post-thumbnail img").hide(".single-post-thumbnail");
    });
});


