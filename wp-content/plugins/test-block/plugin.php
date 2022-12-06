<?php

/** 
 * Plugin Name: Test Block
 * Author: Nhóm 10
 * version: 1.0.0
 * Description: create new block show
 */
//  function testblock(){

//     wp_enqueue_script(
//         'my-new-block',
//         plugin_dir_url(__FILE__) . 'gmail-block.js',
//         array('wp-blocks', 'wp-editor'),
//         true
//     );
//  }
//  add_action('enqueue_block_editor_assets','testblock');
function checkgmail(){
    if(is_single('298')){
        ?>
        <form action="#">
        <input id="email" type="email" placeholder="enter your mail">
        <span class="alert">cc</span>
         </form>
        <script>
        const email = document.getElementById('email')
        const alert = document.querySelector('.alert')
        const   patternEmail = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/

        function checkText() {
            if(email.value.length ==0){
                alert.style.padding = '0'
                alert.textContent = ''
            }
            else{
                if(email.value.match(patternEmail)){
                    // đúng định dạng
                    alert.textContent = "Email hợp lệ"
                    alert.style.color = '#14f0ba'
                }else{
                    alert.textContent = "Email không hợp lệ"
                    alert.style.color = '#f01448'
                }
            }
        }

        email.addEventListener('keyup',() => {
            checkText()
        })
        checkText()
 </script>
        <?php
    }
}
add_action('the_content','checkgmail');