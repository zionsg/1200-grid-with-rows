<?php
/**
 * CSS for demos
 *
 * @see      http://intzone.com/1200gridwithrows
 * @author   Ng Kitt Horng, Zion <zion@intzone.com>
 * @category 1200px Grid System with Rows (20-column)
 * @since    1.0.0 (started 2012-07-08T15:00+0800)
 * @version  $Revision: 2012-07-09T07:00+0800 zion.ng $
 */
header('Content-type: text/css; charset: UTF-8'); // will not work without this
?>
<?php
$size = (int)$_GET['size'];
$gutter = (int)$_GET['gutter'];
$cols = (int)$_GET['cols'];
$rows = (int)$_GET['rows'];
?>
body {
    background-color: #102030;
    font-size: 18px;
    margin: 0;
    padding: 0;
}
div { text-align: center; }
p.vertical { /* rotate text */
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
    white-space: nowrap;
    writing-mode:tb-rl;
}
a { color: blue; }
a:hover { color: magenta; }

.bold { font-weight: bold; }
.heading { font-size: 24px; }
.underline { text-decoration: underline; }

.bgWhite { background-color: white; }
.border  {
    border: 1px solid red;
    width: 100%;
}
.center { text-align: center; }
.content {
    margin: 0 auto; /* center within parent */
    padding: 10px;
    width: 95%;
}
.justify { text-align: justify; }
.red     { border: 1px solid red; /* for outlining cell */ }

#columnDemo { background-image: url('../images/col20background.png'); }
#rowDemo    { background-image: url('../images/row10background.png'); }

/* Column Widths */
<?php for ($i = 1; $i <= $cols; $i++): ?>
  <?php echo "\n    "; ?>#col<?php echo $i; ?>row1 { background-image: url('../images/col<?php echo $i; ?>row1.png'); }
<?php endfor; ?>

/* Row Heights */
<?php for ($i = 1; $i <= $rows; $i++): ?>
  <?php echo "\n    "; ?>#row<?php echo $i; ?>col1 { background-image: url('../images/row<?php echo $i; ?>col1.png'); }
<?php endfor; ?>

/* Areas */
#col6row3 { background-image: url('../images/area_col6row3.png'); }
#row6col3 { background-image: url('../images/area_row6col3.png'); }