Web whitelists

====================
Whitelist example:

```json
{
    "whitelist": {
        "files": [{
            "path": "./wordpress/index.php",
            "md5": "b61b25303be0f573a6b9446d5cbe3a5b",
            "size": "418"
        }, 
        ...        
        {
            "path": "./wordpress/license.txt",
            "md5": "ae123513dd2e70337dafc9f57ece23fd",
            "size": "19930"
        }],
        "meta": {
            "file_format_version": "0.1",
            "version": "3.9.1",
            "name": "wordpress"
        }
    }
}
```

Licence
====================

BSD Licence
Copyright (c) 2013 

Peter Volkov, peter.r.volkov@yandex.ru

Greg Zemskov, ai@revisium.com

All rights reserved.


```
Redistribution and use in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

  Redistributions of source code must retain the above copyright notice, this
  list of conditions and the following disclaimer.

  Redistributions in binary form must reproduce the above copyright notice, this
  list of conditions and the following disclaimer in the documentation and/or
  other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
```
