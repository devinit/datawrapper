<?php

class DatawrapperPlugin_VisualizationColumnCharts extends DatawrapperPlugin_Visualization{

    public function init() {
        DatawrapperVisualization::register($this, $this->getMeta_Simple());
        DatawrapperVisualization::register($this, $this->getMeta_Grouped());
        DatawrapperVisualization::register($this, $this->getMeta_Stacked());
    }

    public function getMeta_Simple(){
        $id = $this->getName();

        $meta = array(
            "id" => "column-chart",
            "title" => __("Column Chart", $id),
            "version" => $this->getVersion(),
            "dimensions" => 1,
            "extends" => "raphael-chart",
            "order" => 9,
            "axes" => array(
                "labels" => array(
                    "accepts" => array("text", "date")
                ),
                "columns" => array(
                    "accepts" => array("number"),
                    "multiple" => true
                )
            ),
            "options" => array(
                "base-color" => array(
                    "type" => "base-color",
                    "label" => __("Base color")
                ),
                "sort-values" => array(
                    "type" => "checkbox",
                    "label" => __("Automatically sort bars", $id)
                ),
                "reverse-order" => array(
                    "type" => "checkbox",
                    "label" => __("Reverse order", $id)
                ),
                "negative-color" => array(
                    "type" => "checkbox",
                    "label" => __("Use different color for negative values", $id),
                    "depends-on" => array(
                        "chart.min_value[columns]" => '<0'
                    )
                ),
                "ignore-missing-values" => array(
                    "type" => "checkbox",
                    "label" => __("Ignore missing values", $id),
                    "default" => false
                ),
                "force-labels-off" => array(
                    "type" => "checkbox",
                    "label" => __("Force data-labels off", $id),
                    "default" => false
                ),
                "absolute-scale" => array(
                    "type" => "checkbox",
                    "label" => __("Use the same scale for all columns", $id),
                    "depends-on" => array(
                        "chart.min_columns[columns]" => 2
                    )
                ),
                "y-ticks-manual" => array(
                    "type" => "checkbox",
                    "label" => __("Manually set Y axis ticks", $id),
                    "default" => false
                ),
                "y-ticks" => array(
                    "type" => "number",
                    "label" => "Number of Y axis ticks",
                    "min" => 0,
                    "max" => 999,
                    "depends-on" => array(
                        "y-ticks-manual" => true
                    )
                ),
                "grid-lines" => array(
                    "type" => "radio-left",
                    "label" => __("Grid lines", $id),
                    "options" => array(
                        array("value" => "auto", "label" => __("Automatic", $id)),
                        array("value" => "show", "label" => __("Show", $id)),
                        array("value" => "hide", "label" => __("Hide", $id))
                    ),
                    "default" => false
                )
            )
        );
        return $meta;
    }

    public function getMeta_Grouped(){
        $id = $this->getName();

        $meta = array(
            "id" => "grouped-column-chart",
            "title" => __("Grouped Column Chart", $id),
            "version" => $this->getVersion(),
            "dimensions" => 2,
            "extends" => "raphael-chart",
            "color-by" => "row",
            "order" => 10,
            "axes" => array(
                "labels" => array(
                    "accepts" => array("text", "date")
                ),
                "columns" => array(
                    "accepts" => array("number"),
                    "multiple" => true
                )
            ),
            "options" => array(
                "base-color" => array(
                    "type" => "base-color",
                    "label" => __("Base color")
                ),
                "sort-values" => array(
                    "type" => "checkbox",
                    "label" => __("Automatically sort bars", $id)
                ),
                "reverse-order" => array(
                    "type" => "checkbox",
                    "label" => __("Reverse order", $id)
                ),
                "sticky-labels" => array(
                    "type" => "checkbox",
                    "label" => __("Labels always on", $id)
                ),
                "negative-color" => array(
                    "type" => "checkbox",
                    "label" => __("Use different color for negative values", $id),
                    "depends-on" => array(
                        "chart.min_value[columns]" => '<0'
                    )
                ),
                "y-ticks-manual" => array(
                    "type" => "checkbox",
                    "label" => __("Manually set Y axis ticks", $id),
                    "default" => false
                ),
                "y-ticks" => array(
                    "type" => "number",
                    "label" => "Number of Y axis ticks",
                    "min" => 0,
                    "max" => 999,
                    "depends-on" => array(
                        "y-ticks-manual" => true
                    )
                )
            ),
            "libraries" => array()
        );
        return $meta;
    }

    public function getMeta_Stacked(){
        $id = $this->getName();

        $meta = array(
            "id" => "stacked-column-chart",
            "title" => __("Stacked Column Chart", $id),
            "version" => $this->getVersion(),
            "dimensions" => 2,
            "extends" => "grouped-column-chart",
            "color-by" => "row",
            "order" => 11,
            "axes" => array(
                "labels" => array(
                    "accepts" => array("text", "date")
                ),
                "columns" => array(
                    "accepts" => array("number"),
                    "multiple" => true
                )
            ),
            "options" => array(
                "base-color" => array(
                    "type" => "base-color",
                    "label" => __("Base color")
                ),
                "sort-values" => array(
                    "type" => "checkbox",
                    "label" => __("Automatically sort bars", $id)
                ),
                "reverse-order" => array(
                    "type" => "checkbox",
                    "label" => __("Reverse order", $id)
                ),
                "top-labels" => array(
                    "type" => "checkbox",
                    "label" => __("Labels on top", $id)
                ),
                "sticky-labels" => array(
                    "type" => "checkbox",
                    "label" => __("Labels on segment", $id)
                ),
                "negative-color" => array(
                    "type" => "checkbox",
                    "label" => __("Use different color for negative values", $id)
                ),
                "normalize" => array(
                    "type" => "checkbox",
                    "label" => __("Stack percentages", $id),
                    "default" => false
                ),
                "normalize-user" => array(
                    "type" => "checkbox",
                    "label" => __("Let user switch mode"),
                    "depends-on" => array(
                        "normalize" => true
                    )
                ),
                "y-ticks-manual" => array(
                    "type" => "checkbox",
                    "label" => __("Manually set Y axis ticks", $id),
                    "default" => false
                ),
                "y-ticks" => array(
                    "type" => "number",
                    "label" => "Number of Y axis ticks",
                    "min" => 0,
                    "max" => 999,
                    "depends-on" => array(
                        "y-ticks-manual" => true
                    )
                )
            ),
            "locale" => array(
                "stack percentages" => __("stack percentages", $id),
                "cannotShowNegativeValues" => __("Negative values, as contained in your dataset, cannot be stacked on top of each other in a stacked column chart. Please consider using a different chart type instead (eg. a grouped column chart).", $id)
            )
        );
        return $meta;
    }
}
