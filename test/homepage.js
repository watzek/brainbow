casper.test.begin('Homepage', 1, function(test) {
  casper.start('http://localhost:8080')
  casper.then(function() {
    test.assertTitle('brainbow.science', 'site title is \"brainbow.science\"')
  })
  casper.run(function() {
    test.done()
  })
})
