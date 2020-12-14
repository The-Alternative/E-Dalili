<style>
    .container {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 10px;
    }

    .box {
        border: 3px solid #666;
        background-color: #ddd;
        border-radius: .5em;
        padding: 10px;
        cursor: move;
    }
</style>
{{--<div class="container">--}}
{{--    <div draggable="true" class="box">A</div>--}}
{{--    <div draggable="true" class="box">B</div>--}}
{{--    <div draggable="true" class="box">C</div>--}}
{{--</div>--}}
{{--<!-- End About-Us -->--}}
{{--<script>--}}
{{--    function handleDragStart(e) {--}}
{{--        this.style.opacity = '0.4';--}}
{{--    }--}}

{{--    function handleDragEnd(e) {--}}
{{--        this.style.opacity = '1';--}}
{{--    }--}}

{{--    let items = document.querySelectorAll('.container .box');--}}
{{--    items.forEach(function(item) {--}}
{{--        item.addEventListener('dragstart', handleDragStart, false);--}}
{{--        item.addEventListener('dragend', handleDragEnd, false);--}}
{{--    });--}}
{{--    document.addEventListener('DOMContentLoaded', (event) => {--}}

{{--        function handleDragStart(e) {--}}
{{--            this.style.opacity = '0.4';--}}
{{--        }--}}

{{--        function handleDragEnd(e) {--}}
{{--            this.style.opacity = '1';--}}

{{--            items.forEach(function (item) {--}}
{{--                item.classList.remove('over');--}}
{{--            });--}}
{{--        }--}}

{{--        function handleDragOver(e) {--}}
{{--            if (e.preventDefault) {--}}
{{--                e.preventDefault();--}}
{{--            }--}}

{{--            return false;--}}
{{--        }--}}

{{--        function handleDragEnter(e) {--}}
{{--            this.classList.add('over');--}}
{{--        }--}}

{{--        function handleDragLeave(e) {--}}
{{--            this.classList.remove('over');--}}
{{--        }--}}

{{--        let items = document.querySelectorAll('.container .box');--}}
{{--        items.forEach(function(item) {--}}
{{--            item.addEventListener('dragstart', handleDragStart, false);--}}
{{--            item.addEventListener('dragover', handleDragOver, false);--}}
{{--            item.addEventListener('dragenter', handleDragEnter, false);--}}
{{--            item.addEventListener('dragleave', handleDragLeave, false);--}}
{{--            item.addEventListener('dragend', handleDragEnd, false);--}}
{{--        });--}}
{{--    });--}}
{{--    function handleDrop(e) {--}}
{{--        e.stopPropagation(); // stops the browser from redirecting.--}}
{{--        return false;--}}
{{--    }--}}
{{--    function handleDragStart(e) {--}}
{{--        this.style.opacity = '0.4';--}}

{{--        dragSrcEl = this;--}}

{{--        e.dataTransfer.effectAllowed = 'move';--}}
{{--        e.dataTransfer.setData('text/html', this.innerHTML);--}}
{{--    }--}}
{{--    function handleDrop(e) {--}}
{{--        e.stopPropagation();--}}

{{--        if (dragSrcEl !== this) {--}}
{{--            dragSrcEl.innerHTML = this.innerHTML;--}}
{{--            this.innerHTML = e.dataTransfer.getData('text/html');--}}
{{--        }--}}

{{--        return false;--}}
{{--    }--}}
{{--    function handleDrop(e) {--}}
{{--        e.stopPropagation(); // Stops some browsers from redirecting.--}}
{{--        e.preventDefault();--}}

{{--        var files = e.dataTransfer.files;--}}
{{--        for (var i = 0, f; f = files[i]; i++) {--}}
{{--            // Read the File objects in this FileList.--}}
{{--        }--}}
{{--    }--}}
</script>
