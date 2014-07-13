//// strict.php
<?hh // strict

function test(): void {
  f1();
  f1(1, 2, 3);

  f2('a');
  f2('a', 'b', 'c');
}

function takes_container<T>(Container<T> $arg): ?T {
  foreach ($arg as $elt) {
    return $elt;
  }
  return null;
}

function takes_keyed_container<Tk,Tv>(KeyedContainer<Tk,Tv> $c): void {}

function takes_vec_array<Tv>(array<Tv> $c): void {}

function takes_hash_array<Tk,Tv>(array<Tk,Tv> $c): void {}

//// partial.php

<?hh // partial

// While there's no support for f(<hint> ...$args), partial is necessary to
// use variadic function declarations

function f1(...$args): void {
  // hh_show($args);
  foreach ($args as $arg) {
    echo $arg;
  }
  takes_container($args);
  takes_keyed_container($args);
  takes_vec_array($args);
  takes_hash_array($args);
}

function f2(string $x, ...$args): void {}

class C0 {
  public function meth(...): void {}
}

class C1 extends C0 {
  public function meth(...$args): void {}
}

class C2 extends C1 {
  public function meth($x = null, ...$args): void {}
}