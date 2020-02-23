(function($){
    $(document).ready(function() {
        //single page popup image
        $(".popup").each(function(){
            var image = $(this).find("img").attr("src");
            $(this).attr("href",image);
        })
    });
})(jQuery);


