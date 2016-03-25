# php wrapper for http://left-pad.io/

Use leftpad like a pro, even in php!

# Why?

You may think you are save to use [https://packagist.org/packages/alexsoft/leftpad](leftpad). But what do you do if it gets unpublished due to a ragequit? Better trust the cloud!

## Usage:

```
echo (new LeftPad(new LeftPadIoFetcher()))
    ->pad('Horst', '@', 13);
```

This will echo `@Horst`.
