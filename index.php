<pre>
    <?php

    require './vendor/autoload.php';
// Connection ES
    $es = Elasticsearch\ClientBuilder::create()
            ->setHosts(["shakir:9200"])
            ->build();

    /*
     * Create an index
     */
//$index = $es->index([
//    "index"=>"blogging_index",
//    "type"=>"blogType",
//    "body"=>[
//        "Title"=>"Test my another Title",
//        "Body"=>"Hello this for another testing"
//    ]
//]);

    /*
     * Get an index
     */
//$index = $es->get([
//    "index" => "blogging_index",
//    "type" => "blogType",
//    "id"=>"AVE45jKIKKD7W4VHDzGu"
//]);

    /*
     * Get an index
     */
    $index = $es->search([
        "index" => "blogging_index",
        "type" => "blogType",
        "body" => [
            "query" => [
                "match" => ["Title" => "Title"]
            ]
        ]
    ]);
    print_r($index);
    ?>
</pre>