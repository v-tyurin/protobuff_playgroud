<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: main.proto

namespace GPBMetadata;

class Main
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Front::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aca020a0a6d61696e2e70726f746f120950726f746f6275666622a8020a06506572736f6e120b0a03616765180120012805120c0a046e616d6518022001280912150a0d736d616c6c5f7069637475726518042001280c121b0a1369735f70726f66696c655f7665726966696564180520012808120e0a0668656967687418062001280212150a0d70686f6e655f6e756d62657273180720032809120c0a0474747474180820032802122e0a096579655f636f6c6f7218092001280e321b2e50726f746f627566662e506572736f6e2e457965436f6c6f757212280a077469636b657473180a2003280b32172e50726f746f627566662e66726f6e742e5469636b657422400a09457965436f6c6f757212150a11554e4b4e4f574e5f4559455f434f4c4f52100012070a03524544100112090a0542524f574e100212080a04424c55451003620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
