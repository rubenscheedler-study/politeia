function PercentageBar(settings) {
    
    this.container = settings.container || $("body");
    this.element = undefined;
    
    this.width = settings.width || 300;
    this.height = settings.height || 30;
    this.min = settings.min || 0;
    this.max = settings.max || 100;
    this.neutral = settings.neutral || 0;
    this.value = settings.value || settings.min;
    
    if (this.min > this.neutral || this.neutral > this.max || this.min >= this.max) {
        throw ("wrong boundaries: min=" + this.min + ", neutral=" + this.neutral + ", max=" + this.max);
    }
    
    this.setValue = function(v) {
        this.value = v;
        this.repaint();
    };    
    
    this.repaint = function() {
        var id = this.element ? $(this.element).attr("data-id") : $(".percentage-bar").length;
        if (this.element !== undefined) {
            $(this.element).remove();
        }
        
        var html = "";
        html += '<div data-id="'+id+'" id="percentage-bar-'+id+'" class="percentage-bar">';
        html += '<div style="width:'+this.width+'px;" class="bar-outline">';
        html += '<div class="bar-content-area">';
        html += '<div style="';
        //styling of the bar
        var percentOfBarForPositive = (this.max-this.neutral)/(this.max-this.min)*100;
        var percentageOfBarForNegative = 100 - percentOfBarForPositive;
        var classToAdd = "";    
        if (this.value < this.neutral) {//NEGATIVE
            classToAdd = "negative";
            var w = (Math.abs(this.value)/(this.neutral-this.min))*percentageOfBarForNegative;
            html += 'width: ' + w + '%;';
            html += 'margin-left: ' + (percentageOfBarForNegative-w) + '%;';
        } else { //POSITIVE
            classToAdd = "positive";
            var w = this.value/(this.max-this.neutral)*percentOfBarForPositive;
            html += 'width: ' + w + '%;';
            html += 'margin-left: ' + percentageOfBarForNegative + '%;';
        }
        //color of the percentage bar
        html += "background-color: " + this.getColor(this.value) + ";";
        
        html += '" class="bar-content '+classToAdd+'">' + this.value + '%</div>';
        html += '</div>';//content area
        html += '</div>';//outline
        html += '</div>';//bar
        $(this.container).append(html);
    };
    
    this.getColor = function(v) {
        v = parseInt(v);
        var MAX_GREEN = 255;
        var MAX_RED = 255;
        //shift interval to be fully positive
        var toShift = 0 - this.min;
        var newMin = this.min + toShift;
        var newMax = this.max + toShift;
        var newVal = v + toShift;
        console.log(newVal);
        //calculate percentual place of v in new interval
        var perc = (newVal/(newMax-newMin))*100;// is in [0,100]
        //console.log(perc);
        var greenComponent = Math.max(2*(perc-50),0)/100*MAX_GREEN; //max from 50%
        var redComponent = MAX_RED - Math.max(2*(perc-50),0)/100*MAX_RED; //max upto 50%
        return "rgb("+redComponent+","+greenComponent+",0)";
        
    };
}