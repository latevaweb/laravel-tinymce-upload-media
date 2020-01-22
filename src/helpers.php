<?php

if(! function_exists('response_tinymce')) {
    /**
     * Respond a script back to TinyMCE
     *
     * @param  string $filename
     * @return string
     */
    function response_tinymce($filename)
    {
        return ("
            <script>
            top.$('.mce-btn.mce-open').parent().find('.mce-textbox').val('/img/".$filename."').closest('.mce-window').find('.mce-primary').click();
            </script>
        ");
    }
}
