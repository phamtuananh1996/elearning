<?php
namespace GFL\Elearning\commands;

use GFL\Elearning\Support\Stub;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CreateController extends GeneratorCommand
{
    /**
     * The name of argument being used.
     *
     * @var string
     */
    protected $argumentName = 'controller';
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'gfl:make-controller';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate new restful controller for the specified module.';
    /**
     * Get controller name.
     *
     * @return string
     */
    public function getDestinationFilePath()
    {
        return dirname(__FILE__, 2) . '/controllers/' . $this->getControllerName() . '.php';
    }
    /**
     * @return string
     */
    protected function getTemplateContents()
    {
        return (new Stub($this->getStubName(), [
            'CONTROLLERNAME' => $this->getControllerName(),
            'NAMESPACE' => "GFL\Elearning",
            'CLASS_NAMESPACE' => $this->getClassNamespace(),
            'CLASS' => class_basename($this->getControllerName()),
        ]))->render();
    }
    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['controller', InputArgument::REQUIRED, 'The name of the controller class.'],
            ['module', InputArgument::OPTIONAL, 'The name of module will be used.'],
        ];
    }
    /**
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['plain', 'p', InputOption::VALUE_NONE, 'Generate a plain controller', null],
        ];
    }
    /**
     * @return array|string
     */
    protected function getControllerName()
    {
        $controller = studly_case($this->argument('controller'));
        if (str_contains(strtolower($controller), 'controller') === false) {
            $controller .= 'Controller';
        }
        return $controller;
    }
    public function getDefaultNamespace(): string
    {
        return "GFL\Elearning\controllers";
    }
    /**
     * Get the stub file name based on the plain option
     * @return string
     */
    private function getStubName()
    {
        if ($this->option('plain') === true) {
            return '/controller-plain.stub';
        }
        return '/controller.stub';
    }
}
