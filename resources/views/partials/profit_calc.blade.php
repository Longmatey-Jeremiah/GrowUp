<section class="" style="background:url('{{ asset('images/calculate-bg.jpg') }}') repeat fixed" data-type="background" data-speed="10">
    <div class="row pad-top">
        <div class="col s12">
          <div class="row center pad-top">
              <h6 class="small center white-text text-lighten-1">Growth Rate</h6>
               <h5 class="header col s12 white-text">PROFIT CALCULATOR</h5>
            </div>
        </div>
    </div>
    <div class=" container">
      <div class="row">
        <div class="col s12 l7 deep-purple darken-4 white-text containerx"  style="margin-bottom:0;min-height:480px">
          <div class="row pad-top">
            <div class="containerx">
            <div class="col s5">
              <div><p class="white-text header">Currency:</p></div> 
            </div>
            <div class="col s5 center">
              <div class="input-field blue white-text" style="width:70%">
                <select name="currency" class="center" id="currency">
                  <option value="1">Ethereum</option>
                  <option value="1.5">BITCOIN</option>
                  <option value="3">S&P 500</option>
                  <option value="1.3">Our megaplan</option>
                </select>
              </div>
            </div>
          </div>
          </div>
          <div class="row pad-top">
            <div class="containerx">
              <div class="col s5">
                <div><p class="white-text header">How much money:</p></div> 
              </div>
              <div class="col s5">
                <div class="input-field white-text">
                  <input type="number" class="white-text blue center" id="howmuch" min="10" value="30" max="50000" />
                </div>
              </div>
            </div>
          </div>
            
            <div class="row pad-top">
                <div class="containerx">
                    <div class="col s5">
                        <p class="header">Duration:</p>
                    </div>
                    
                    <div class="col s5">
                        <p class="input-field">
                            <input type="number" class="blue center white-text" value="5" id="duration" min="3" max="24" required />
                        </p>
                    </div>
                </div>
            </div>
              <div class="row pad-top">
                <div class="containerx"></div>
                    <div class="col s12 center">
                        <button class="btn white-text blue small waves-effect waves-ripple" id="profit_calc_btn">Calculate Now</button>
                    </div>
              </div>
            </div>
            
        
        <div class="col s12 l5 blue"  style="margin-bottom:0;min-height:480px">
            <div class="row center pad-top containerx">
                <div class="col s12">
                <h5 class="big white-text">
                    RESULT
                </h5>
                </div>
            </div>

            <div class="row pad-top">
                <div class="containerx">
                <div class="col s6">
                    <p class="header white-text">Profit:</p>
                </div>
                <div class="col s6">
                    <p id="profit1" class="white-text">$1,000</p>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="containerx">
                <div class="col s6">
                <p class="header white-text">
                    Profit rate:
                </p>
                </div>
                <div class="col s6">
                    <p id="fees" class="white-text"></p>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="containerx">
                        <div class="col s6">
                            <p class="header white-text">
                                Bonus:
                            </p>
                        </div>
                        <div class="col s6">
                            <p id="bonus" class="white-text">$1,000</p>
                        </div>
                    </div>
                </div>
                    
                <div class="divider"></div>
                
                <div class="row">
                    <div class="containerx">
                    <div class="col s6">
                    <p class="header white-text">
                        Total:
                    </p>
                    </div>
                    <div class="col s6">
                    <p id="total" class="white-text">$2,000</p>
                    </div>
                </div>

                <div class="divider"></div>
                </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <br><br>
  </section>
