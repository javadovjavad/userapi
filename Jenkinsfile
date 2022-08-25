pipeline {
    agent any
	 docker {
		    image 'zricethezav/gitleaks'
		    args '--entrypoint=""'
		}
    stages {
        stage('Gitleaks') {
            env
            steps {
               echo "Running ${env.BUILD_ID} on ${env.JENKINS_URL}"
            }
            steps {
              
               sh "git clone https://github.com/${repo}.git && cd userapi/ && gitleaks detect -v"
              
            }
        }
    }
}
