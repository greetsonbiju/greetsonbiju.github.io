<?php
define('sessionspath', 's/');
define('PNG_STICKERS', true);
define('FORCE_HTTPS', false);
define('CHROME_HTTPS', false);

define('CONVERT_VOICE_MESSAGES', false);
define('VOICE_TMP_DIR', sys_get_temp_dir().'/mp/');
define('FFMPEG_DIR', '');

define('LOGIN_CAPTCHA', true);
define('INSTANCE_PASSWORD', null);

define('FILE_REWRITE', false);

// https://github.com/ed-asriyan/lottie-converter (Add "#!/usr/bin/env bash" as first line in its bash scripts!)
define('CONVERT_TGS_STICKERS', false);
define('LOTTIE_DIR', '');
define('TGS_TMP_DIR', sys_get_temp_dir().'/mp/');
define('LOTTIE_TO_GIF', true);

define('ENABLE_API', false);
