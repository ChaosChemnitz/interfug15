package ChaosChemnitz::Interfug15::Webseite;
use Dancer2;

our $VERSION = '0.1';

our $PAGES = [
    {url => '/',        name => 'Startseite'},
    {url => '/anreise', name => 'Anreise'},
    {url => '/cfp',     name => 'Call for Papers'},
    {url => '/kontakt', name => 'Kontakt'},
    {url => '/tickets', name => 'Tickets'},
];

get qr/.*/ => sub {
    my $site  = request->path;
    my $found = 0;

    for my $page (@$PAGES) {
        if ($page->{url} eq "$site") {
            $found = 1;
            last;
        }
    }

    if (!$found) {
        send_error "Not found", 404;
    }

    $site = unpack "xA*", $site;

    if ($site eq '') {
        $site = 'home';
    }

    template $site, {pages => $PAGES};
};

true;
