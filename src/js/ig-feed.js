let tk = '659355691.bcbe30e.c22b15710521487db0a5cf79cfbcaf33';
let cnt = 6;
setTimeout(function() {
    fetch(`https://api.instagram.com/v1/users/self/media/recent/?access_token=${tk}&count=${cnt}`)
        .then(function(res){
            return res.json();
        })
        .then(function(data) {

            let output = '';
            data.data.forEach(function(post) {

                output += `
                    <div class='col-4 col-lg-2'>
                        <a href='${post.link}'>
                            <img class="img-fluid" src='${post.images.low_resolution.url}' target='_blank'>
                        </a>
                    </div>
                `

            });

            document.getElementById('ig-feed').innerHTML = output;
        });
}, 4000);