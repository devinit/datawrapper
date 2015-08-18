(function(){

    // DevInit Theme
    // -------------
    //

    dw.theme.register('devinit', {

        colors: {
            palette: [
              "#ba0c2f" //Red
              ,"#333333" //Grey
              ,"#b7bf10" //Yellow
              ,"#ea7600" //Orange
              ,"#93328e" //Purple
              ,"#1b365d" //Blue
              ,"#0095c8" //Lightblue
              ],
            secondary: [
                //80%'s
                "#d66d82" //Red
                ,"#7f7f7f" //Grey
                ,"#d4d970" //Yellow
                ,"#f2ad66" //Orange
                ,"#be84bb" //Purple
                ,"#76869e" //Blue
                ,"#66bfde" //Lightblue
                //20%'s
                ,"#f7ced5" //Red
                ,"#cccccc" //Grey
                ,"#f7f2cf" //Yellow
                ,"#fbe4cc" //Orange
                ,"#e9d6e8" //Purple
                ,"#d1d7df" //Blue
                ,"#cceaf4" //Lightblue
            ],
            positive: "#ba0c2f", //Red
            negative: "#7f7f7f", //Grey
            background: '#fff', //white
            text: "#000", //Black
        /*
         * gradients that might be used by color gradient selectors
         *
         * Colors from www.ColorBrewer2.org by Cynthia A. Brewer,
         * Geography, Pennsylvania State University.
         */
        gradients: [
            ['#ba0c2f','#d66d82','#f7ced5'], //red
            ['#333333','#7f7f7f','#cccccc'], //grey
            ['#b7bf10','#d4d970','#f7f2cf'], //yellow
            ['#ea7600','#f2ad66','#fbe4cc'], //orange
            ['#93328e','#be84bb','#e9d6e8'], //purple
            ['#1b365d','#76869e','#d1d7df'], //blue
            ['#0095c8','#66bfde','#cceaf4'], //lightblue
            ['#820820','#ba0c2f','#f7ced5'], //darkred
            ['#000000','#666666','#cccccc'], //black
            ['#80850b','#b7bf10','#f7f2cf'], //darkyellow
            ['#a35200','#ea7600','#fbe4cc'], //darkorange
            ['#662363','#93328e','#e9d6e8'], //darkpurple
            ['#122541','#1b365d','#d1d7df'], //darkblue
            ['#00688c','#0095c8','#cceaf4'] //darklightblue
        ],

        /*
         * presets for category colors
         *
         * Colors from www.ColorBrewer2.org by Cynthia A. Brewer,
         * Geography, Pennsylvania State University.
         */
        categories: [
            [
                "#ba0c2f" //Red
                ,"#333333" //Grey
                ,"#b7bf10" //Yellow
                ,"#ea7600" //Orange
                ,"#93328e" //Purple
                ,"#1b365d" //Blue
                ,"#0095c8" //Lightblue
              ], // Primary
            [
                "#d66d82" //Red
                ,"#7f7f7f" //Grey
                ,"#d4d970" //Yellow
                ,"#f2ad66" //Orange
                ,"#be84bb" //Purple
                ,"#76869e" //Blue
                ,"#66bfde" //Lightblue
             ], // 80%'s
            [
                "#f7ced5" //Red
                ,"#cccccc" //Grey
                ,"#f7f2cf" //Yellow
                ,"#fbe4cc" //Orange
                ,"#e9d6e8" //Purple
                ,"#d1d7df" //Blue
                ,"#cceaf4" //Lightblue
             ] // 20's
        ]
    },

    annotation: {
        background: '#000',
        opacity: 0.08
    },

    /*
     * padding around the chart area
     */
    padding: {
        left: 0,
        right: 20,
        bottom: 30,
        top: 10
    },

    /*
     * custom properties for line charts
     */
    lineChart: {
        // stroke width used for lines, in px
        strokeWidth: 2,
        // the maximum width of direct labels, in px
        maxLabelWidth: 80,
        // the opacity used for fills between two lines
        fillOpacity: 1,
        // distance between labels and x-axis
        xLabelOffset: 20
    },

    /*
     * custom properties for column charts
     */
    columnChart: {
        // if set to true, the horizontal grid lines are cut
        // so that they don't overlap with the grid label.
        cutGridLines: false,
        // you can customize bar attributes
        barAttrs: {
            'stroke-width': 1
        },
        // make strokes a little darker than the fill
        darkenStroke: false
    },

    /*
     * custom properties for bar charts
     */
    barChart: {
        // you can customize bar attributes
        barAttrs: {
            'stroke-width': 1
        },
        darkenStroke: false
    },
    darkenStroke:false,

    /*
     * attributes of x axis, if there is any
     */
    xAxis: {
        stroke: '#333'
    },

    /*
     * attributes of y-axis if there is any shown
     */
    yAxis: {
        strokeWidth: 1
    },


    /*
     * attributes applied to horizontal grids if displayed
     * e.g. in line charts, column charts, ...
     *
     * you can use any property that makes sense on lines
     * such as stroke, strokeWidth, strokeDasharray,
     * strokeOpacity, etc.
     */
    horizontalGrid: {
        stroke: '#cccccc',
        strokeWidth: 1
        //strokeDasharray: ". "
    },

    /*
     * just like horizontalGrid. used in line charts only so far
     *
     * you can define the grid line attributes here, e.g.
     * verticalGrid: { stroke: 'black', strokeOpacity: 0.4 }
     */
    verticalGrid: {
        stroke: '#cccccc',
        strokeWidth: 1,
        strokeDasharray:false
    },

    /*
     * draw a frame around the chart area (only in line chart)
     *
     * you can define the frame attributes here, e.g.
     * frame: { fill: 'white', stroke: 'black' }
     */
    frame: false,

    /*
     * if set to true, the frame border is drawn separately above
     * the other chart elements
     */
    frameStrokeOnTop: false,

    /*
     * probably deprecated
     */
    yTicks: false,


    hover: true,
    tooltip: true,

    hpadding: 0,
    vpadding: 10,

    /*
     * some chart types (line chart) go into a 'compact'
     * mode if the chart width is below this value
     */
    minWidth: 100,

    /*
     * theme locale, probably unused
     */
    //locale: 'de_DE',

    /*
     * duration for animated transitions (ms)
     */
    duration: 1000,

    /*
     * easing for animated transitions
     */
     easing: 'expoInOut'
        //horizontalGrid: {
        //    stroke: '#000' //Black
        //},
        //
        //xAxis: {
        //    stroke: '#000' //Black
        //}

    });

}).call(this);