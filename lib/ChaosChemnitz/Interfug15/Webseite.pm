package ChaosChemnitz::Interfug15::Webseite;
use Dancer2;

our $VERSION = '0.1';

our $PAGES = [
    { url => '/',        name => 'Startseite' },
    { url => '/anreise', name => 'Anreise' },
    { url => '/cfp',     name => 'Call for Papers' },
    { url => '/kontakt', name => 'Kontakt' },
    { url => '/tickets', name => 'Tickets' },
];

get '/' => sub {
    template 'home',  { pages => $PAGES };
};

get '/anreise' => sub {
    template 'anreise', { pages => $PAGES };
};

get '/cfp' => sub {
    template 'cfp', { pages => $PAGES };
};

get '/kontakt' => sub {
    template 'kontakt', { pages => $PAGES };
};

get '/tickets' => sub {
    template 'tickets', { pages => $PAGES };
};

true;
