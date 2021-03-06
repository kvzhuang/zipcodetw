The ZIP Code Finder for Taiwan
==============================

This package lets you find ZIP code by address in Taiwan.

The main features:

1. Fast. It builds ZIP code index by tokenization.
2. Gradual. It returns partial ZIP code rather than noting when address is not
   detailed enoguh.
3. Lightweight. It depends on nothing.

Usage
-----

Find the ZIP code gradually:

.. code-block:: python

    >>> import zipcodetw
    >>> zipcodetw.find('臺北市')
    '1'
    >>> zipcodetw.find('臺北市信義區')
    '110'
    >>> zipcodetw.find('臺北市信義區市府路')
    '110'
    >>> zipcodetw.find('臺北市信義區市府路1號')
    '11008'

Find all possible ZIP codes:

.. code-block:: python

    >>> zipcodetw.find_zipcodes('臺北市信義區市府路')
    set(['11060', '11001', '11008', '11073'])

Installation
------------

It is easy to install this package from PyPI:

.. code-block:: bash

    $ sudo pip install zipcodetw

Then, have fun. :)

Report Bug
----------

It lets machine understand an address and use the address to find the ZIP code. But machine is stupid, it may still misunderstand ... In fact, I might write some bad code.

So, if you get wrong reuslt, please feel free to email me: mosky.tw AT gmail.com.

Data
----

The ZIP code directory we use is provided by Chunghwa Post, and is available
from: http://www.post.gov.tw/post/internet/down/index.html#1808
