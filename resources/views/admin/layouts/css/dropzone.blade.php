<style>

    .drop-zone {
        width: 100%;
        border: 2px dashed #aaa;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        background-color: white;
        border-radius: 10px;
        transition: 0.3s;
    }
    .drop-zone.dragover {
        border-color: #007bff;
        background-color: #f0f8ff;
    }
    .file-list {
        margin-top: 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }
    .file-item {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background: white;
    }
    .file-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .file-item .remove-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background: red;
        color: white;
        border: none;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        cursor: pointer;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

</style>
