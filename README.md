EE_Relative_URL
============

ExpressionEngine wants every website on a single environment, tied to a single web address, and with every URL an absolute URL. Developers attempting to manage multiple environments often find themselves scouring the 80+ tables that make up ExpressionEngine's database for uncaught instances of the last-managed environment's web address. While utilities exist to ease the work of migrating an EE database across servers, few if any provide a simple means to address server setups of any complexity in the templates.

Relative_URL is an ExpressionEngine plugin that brings a blunt regular expression to EE's generated URLs, stripping them to a spare `/`.

## Installation

Move or copy the `relative_url` directory to `system/expressionengine/third_party/`.

## Usage

| in the template                                                       | plausible output   |
| --------------------------------------------------------------------- | ------------------ |
| `{exp:relative_url}http://example.com/foo/bar{/exp:relative_url}`     | `/foo/bar`         |
| `{exp:relative_url}{url_title_path='blog/index'}/{/exp:relative_url}` | `/blog/category/8` |
| `{exp:relative_url}{url}{/exp:relative_url}`                          | `/images/sharing/dwi.gif`  |

## License

Copyright © 2013 Justin Skolnick

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
