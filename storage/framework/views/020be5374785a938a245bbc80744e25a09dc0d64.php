 <?php if (isset($component)) { $__componentOriginaldeb0f517f9b847b9908de3090e93d59b3452029c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ArgonCss::class, []); ?>
<?php $component->withName('argon-css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginaldeb0f517f9b847b9908de3090e93d59b3452029c)): ?>
<?php $component = $__componentOriginaldeb0f517f9b847b9908de3090e93d59b3452029c; ?>
<?php unset($__componentOriginaldeb0f517f9b847b9908de3090e93d59b3452029c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<div>
     <?php if (isset($component)) { $__componentOriginal2cfb2727414d28f1d2ba20b22e14c0766904fa52 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Panel::class, ['title' => 'My Component']); ?>
<?php $component->withName('panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal2cfb2727414d28f1d2ba20b22e14c0766904fa52)): ?>
<?php $component = $__componentOriginal2cfb2727414d28f1d2ba20b22e14c0766904fa52; ?>
<?php unset($__componentOriginal2cfb2727414d28f1d2ba20b22e14c0766904fa52); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
</div>

 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.argon-js','data' => []]); ?>
<?php $component->withName('argon-js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> <?php /**PATH C:\Users\Matheus\Desktop\LaravelSupera\SuperaTeste\resources\views/contratoTela.blade.php ENDPATH**/ ?>