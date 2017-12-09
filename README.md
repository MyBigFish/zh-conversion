zh-conversion
=====
[![Build Status](https://travis-ci.org/LiuShulong/zh-conversion.svg?branch=master)](https://travis-ci.org/LiuShulong/zh-conversion.svg?branch=master)
[![codecov](https://codecov.io/gh/LiuShulong/zh-conversion/branch/master/graph/badge.svg)](https://codecov.io/gh/LiuShulong/zh-conversion)

中文简体和繁体转换工具,数据字体对照表来自于 MediaWiki

```php
use slliu\zh\Convert;
$sRet = Convert::zhconversion_hant($sChar);
```

Install
-------

Install `zh-conversion` using Composer.

```
$ composer require slliu/zh-conversion
```

Test
-------

```
composer run-script test
```

License
-------

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
