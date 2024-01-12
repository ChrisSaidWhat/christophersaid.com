//  ALL content must be JavaScript 

function formatUSD(inAmount){

    return new Intl.NumberFormat(
        'en-US', { 
            style: 'currency', 
            currency: 'USD', 
        }
        ).format(inAmount);

}   //  end formatUSD()