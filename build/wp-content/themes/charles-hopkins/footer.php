<?php
if(!is_home() && !is_front_page()) {
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php }
	wp_footer(); ?>
<script>
let token = '659355691.bcbe30e.c22b15710521487db0a5cf79cfbcaf33';
let count = 6;
setTimeout(function() {
    const igFeed = fetch(`https://api.instagram.com/v1/users/self/media/recent/?access_token=${token}&count=${count}`)
        .then(function(res){
            return res.json();
        })
        .then(function(data) {

            let output = '';
            data.data.forEach(function(post) {

                output += `
                        <a href='${post.link}' target="_blank">
                        <div class='w-16' style="background:url(${post.images.low_resolution.url}) center; background-size: cover;">
                        </div>
                        </a>
                `

            });

            document.getElementById('ig-feed').innerHTML = output;
        });
}, 0)
</script>
</body>
</html>
