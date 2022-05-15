<template>
    <div>
        <div>
           <h1>Selamat Datang</h1>
        </div>
            <slot />
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    components: {
        Link,
    }
}
</script>