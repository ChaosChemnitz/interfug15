#!/usr/bin/env perl

use strict;
use warnings;
use FindBin;
use lib "$FindBin::Bin/../lib";

use ChaosChemnitz::Interfug15::Webseite;
ChaosChemnitz::Interfug15::Webseite->to_app;
