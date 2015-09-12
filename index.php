<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			$(function () {
				window.onPlayerEvent = function (data) {
					data.forEach(function(event) {
						if (event.event == "playerInit") {
							var player = $("#twitch_embed_player")[0];
							player.playVideo();

							// seting channel
							player.loadStream("asiagodtonegg3be0");
							//can loading old video : 'url:c/1982551' -> 'c1982551'
							//player.loadVideo("c1982551");

						}
					});
				}

				swfobject.embedSWF("//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf", "twitch_embed_player", "640", "400", "11", null,
					{ "eventsCallback":"onPlayerEvent",
						"embed":1,
						// default channel
						"channel":"asiagodtonegg3be0",
						"auto_play":"true"},
					{ "allowScriptAccess":"always",
						"allowFullScreen":"true"});
			});
		</script>
	</head>
	<body>
		<div id="container">
			<h3>Twitch Test</h3>
			<p>source:http://www.twitch.tv/asiagodtonegg3be0</p>
			<div id="twitch_embed_player"></div>
			<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/asiagodtonegg3be0/chat" height="500" width="350"></iframe>
		</div>
	</body>
</html>