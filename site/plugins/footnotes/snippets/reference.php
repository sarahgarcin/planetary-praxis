<?php if(option('sylvainjule.footnotes.links')): ?>
<sup class="footnote"><a id="fnref-<?php echo $count ?>" href="#fn-<?php echo $count ?>"><?php echo $order ?></a><a class="anchor" id="textnote-<?php echo $count ?>"></a></sup>
<?php else: ?>
<sup id="fnref-<?php echo $count ?>" class="footnote" data-ref="#fn-<?php echo $count ?>"><?php echo $order ?></sup><a class="anchor" id="#fn-<?php echo $count ?>"></a>
<?php endif; ?>
