$video = $_GET{'video'}
<!DOCTYPE html>
<html>
<body>
<div id="video" style="width: 100%; height: 400px;max-width: 600px;"></div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/p2p-ckplayer@latest/ckplayer/ckplayer.min.js" charset="UTF-8"></script>
<script type="text/javascript">
    var videoObject = {
        container: '#video',//“#”代表容器的ID，“.”或“”代表容器的class
        variable: 'player',//该属性必需设置，值等于下面的new chplayer()的对象
        autoplay:true,
        html5m3u8:true,
        video:$video,//视频地址
        hlsjsConfig: {   // hlsjs和CDNBye的配置参数
            debug: false,
            // Other hlsjsConfig options provided by hls.js
            p2pConfig: {
                logLevel: true,
                live: false, // 如果是直播设为true
                // Other p2pConfig options provided by CDNBye
                // https://github.com/cdnbye/hlsjs-p2p-engine/blob/master/docs/%E4%B8%AD%E6%96%87/API.md
            }
        }
    };
    var player = new ckplayer(videoObject);
</script>
</body>
</html>
